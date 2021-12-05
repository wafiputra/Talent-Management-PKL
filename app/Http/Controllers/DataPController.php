<?php

namespace App\Http\Controllers;

use App\DataP;
use App\Client;
use Illuminate\Http\Request;

class DataPController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('permission:dataProyek-list|dataProyek-create|dataProyek-edit|dataProyek-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:dataProyek-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:dataProyek-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:dataProyek-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataP = DataP::latest()->paginate(5);
        return view('managemenProyek.dataProyek.index', compact('dataP'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $client = Client::get()->all();
        return view('managemenProyek.dataProyek.create', compact('client'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'nama' => 'required',
            'idClient' => 'required',
            'tanggalmulai' => 'required',
            'tanggalselesai' => 'required',
            'platform' => 'required',
            'deskripsi' => 'required',
        ]);

        DataP::create($request->all());
        // Alamat::create($request->);

        return redirect()->route('dataProyek.index')
            ->with('success', 'Project Data created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DataP $dataP
     * @return \Illuminate\Http\Response
     */
    public function show(DataP $dataP)
    {
        return view('managemenProyek.dataProyek.show', compact('dataP'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DataP $dataP
     * @return \Illuminate\Http\Response
     */
    public function edit($dataP)
    {
        // var_dump($dataP);
        $data = DataP::get()->where('id', $dataP);
        return view('managemenProyek.dataProyek.edit', compact('data'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DataP $dataP
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DataP $data)
    {
        request()->validate([
            'nama' => 'required',
            'tanggalselesai' => 'required',
            'platform' => 'required',
            'deskripsi' => 'required',
        ]);

        // $nama = $request->nama;
        // $tglSelesai = $request->tanggalselesai;
        // $platform = $request->platform;
        // $deskripsi = $request->deskripsi;

        // $data->update([
        //     'nama' => $nama,
        //     'tanggalselesai' => $tglSelesai,
        //     'platform' => $platform,
        //     'deskripsi' => $deskripsi
        // ]);
        $data->update($request->all());
        dd($request->deskripsi, $request->tanggalselesai, $request->id);

        return redirect()->route('dataProyek.index')
            ->with('success', 'Project Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DataP  $dataP
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataP $dataP)
    {
        $dataP->delete();

        return redirect()->route('dataProyek.index')
            ->with('success', 'Project Data deleted successfully');
    }

    public function getData(Request $request)
    {
        $client = Client::where('id', $request->get('id'))
            ->get();

        return response()->json($client);
    }
}
