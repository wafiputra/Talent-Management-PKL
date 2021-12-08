<?php

namespace App\Http\Controllers;

use App\SignP;
use App\DataP;
use Illuminate\Http\Request;

class SignPController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('permission:signProject-list|signProject-create|signProject-edit|signProject-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:signProject-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:signProject-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:signProject-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DataP::latest()->paginate(5);
        return view('signProject.index', compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    public function create()
    {
        // dd($dataP->id);
        // $data = DataP::get()->where('id', $dataP);
        // dd($data);
        return view('signProject.create');
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

        Bidang::create($request->all());
        // Alamat::create($request->);

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
    // public function edit(Bidang  $bidang)
    // {
    //     return view('bidang.edit', compact('bidang'));
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\Bidang  $bidang
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, Bidang  $bidang)
    // {
    //     request()->validate([
    //         'nama' => 'required',
    //         'kategori' => 'required',
    //         'keterangan' => 'required',
    //     ]);

    //     $bidang->update($request->all());

    //     return redirect()->route('bidang.index')
    //         ->with('success', 'Bidang updated successfully');
    // }

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
