<?php

namespace App\Http\Controllers;

use App\DataP;
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
        $bidang = DataP::latest()->paginate(5);
        return view('managemenProyek.dataProyek.index'
        , compact('bidang'))     ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
     public function create()
     {
         return view('bidang.create');
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
             'nama' => 'required',
             'kategori' => 'required',
             'keterangan' => 'required',
         ]);

         DataP::create($request->all());
    //     // Alamat::create($request->);

         return redirect()->route('bidang.index')
             ->with('success', 'Bidang created successfully.');
     }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\Bidang  $bidang
    //  * @return \Illuminate\Http\Response
    //  */
     public function show(DataP  $DataP)
     {
         return view('DataP.show', compact('DataP'));
     }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\Bidang  $bidang
    //  * @return \Illuminate\Http\Response
    //  */
     public function edit(DataP  $bidang)
     {
         return view('bidang.edit', compact('bidang'));
     }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\Bidang  $bidang
    //  * @return \Illuminate\Http\Response
    //  */
     public function update(Request $request, Bidang  $bidang)
     {
         request()->validate([
             'nama' => 'required',
             'kategori' => 'required',
             'keterangan' => 'required',
         ]);

         $bidang->update($request->all());

         return redirect()->route('bidang.index')
             ->with('success', 'Bidang updated successfully');
     }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  \App\Bidang  $bidang
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy(Bidang  $bidang)
    // {
    //     $bidang->delete();

    //     return redirect()->route('bidang.index')
    //         ->with('success', 'Bidang deleted successfully');
    // }
    }