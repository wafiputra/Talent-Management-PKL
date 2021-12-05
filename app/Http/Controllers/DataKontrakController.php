<?php

namespace App\Http\Controllers;

use App\DataKontrak;
use Illuminate\Http\Request;

class DataKontrakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('permission:dataKontrak-list|dataKontrak-create|dataKontrak-edit|dataKontrak-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:dataKontrak-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:dataKontrak-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:dataKontrak-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $dataKontrak = DataKontrak::latest()->paginate(5);
        // , compact('bidang')) ->with('i', (request()->input('page', 1) - 1) * 5
        return view('dataKontrak.index');
    }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    public function create()
    {
        return view('dataKontrak.create');
    }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    public function store(Request $request)
    {
        request()->validate([
            'idkontrak' => 'required',
            'dokumentasi' => 'required',
            'tanggalmasuk' => 'required',
        ]);

        Bidang::create($request->all());
        //Alamat::create($request->);

        return redirect()->route('bidang.index')
            ->with('success', 'Bidang created successfully.');
    }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\Bidang  $bidang
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show(Bidang  $bidang)
    // {
    //     return view('bidang.show', compact('bidang'));
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\Bidang  $bidang
    //  * @return \Illuminate\Http\Response
    //  */
    public function edit(DataKontrak  $dataKontrak)
    {
        return view('dataKontrak.edit', compact('dataKontrak'));
    }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\Bidang  $bidang
    //  * @return \Illuminate\Http\Response
    //  */
    public function update(Request $request, DataKontrak  $dataKontrak)
    {
        request()->validate([
            'nama' => 'required',
            'kategori' => 'required',
            'keterangan' => 'required',
        ]);

        $bidang->update($request->all());

        return redirect()->route('datakontrak.index')
            ->with('success', 'Data Kontrak updated successfully');
    }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  \App\Bidang  $bidang
    //  * @return \Illuminate\Http\Response
    //  */
    public function destroy(DataKontrak  $dataKontrak)
    {
        $bidang->delete();

        return redirect()->route('bidang.index')
            ->with('success', 'Bidang deleted successfully');
    }
}
