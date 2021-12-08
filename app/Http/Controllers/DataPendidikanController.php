<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataPendidikan;

class DataPendidikanController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:dataPendidikan-list|dataPendidikan-create|dataPendidikan-edit|dataPendidikan-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:dataPendidikan-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:dataPendidikan-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:dataPendidikan-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datapendidikan = DataPendidikan::latest()->paginate(5);
        return view('dataPendidikan.index', compact('datapendidikan'))
             ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        return view('dataPendidikan.create');
    }
    public function store(Request $request)
    {
        request()->validate([
            'idpengguna' => 'required',
            'namasekolah' => 'required',
            'jurusan' => 'required',
            'tahunmasuk' => 'required',
            'tahunlulus' => 'required',
        ]);

        DataPendidikan::create($request->all());
        // Alamat::create($request->);

        return redirect()->route('dataPendidikan.index')
            ->with('success', 'Data Pendidikan created successfully.');
    }
    public function show(DataPendidkan  $datapendidikan)
    {
        return view('datapendidikan.show', compact('datapendidikan'));
    }
    public function update(Request $request, DataPendidikan  $datapendidikan)
    {
        request()->validate([
            'idpengguna' => 'required',
            'namasekolah' => 'required',
            'jurusan' => 'required',
            'tahunmasuk' => 'required',
            'tahunlulus' => 'required',
            ]);

        $datapendidikan->update($request->all());

        return redirect()->route('dataPendidikan.index')
            ->with('success', 'Data Pendidikan updated successfully');
    }
    public function destroy(DataPendidikan  $datapendidikan)
    {
        $bidang->delete();

        return redirect()->route('dataPendidikan.index')
            ->with('success', 'Bidang deleted successfully');
    }
    public function edit(DataPendidikan $datapendidikan)
    {
        return view('dataPendidikan.edit', compact('client'));
    }
}
