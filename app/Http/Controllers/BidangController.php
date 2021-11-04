<?php

namespace App\Http\Controllers;

use App\Bidang;
use Illuminate\Http\Request;

class BidangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('permission:bidang-list|bidang-create|bidang-edit|bidang-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:bidang-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:bidang-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:bidang-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bidang = Bidang::latest()->paginate(5);
        return view('bidang.index', compact('bidang'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bidang.create');
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
            'kategori' => 'required',
            'keterangan' => 'required',
        ]);

        Bidang::create($request->all());
        // Alamat::create($request->);

        return redirect()->route('bidang.index')
            ->with('success', 'Bidang created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bidang  $bidang
     * @return \Illuminate\Http\Response
     */
    public function show(Bidang  $bidang)
    {
        return view('bidang.show', compact('bidang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bidang  $bidang
     * @return \Illuminate\Http\Response
     */
    public function edit(Bidang  $bidang)
    {
        return view('bidang.edit', compact('bidang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bidang  $bidang
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bidang  $bidang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bidang  $bidang)
    {
        $bidang->delete();

        return redirect()->route('bidang.index')
            ->with('success', 'Bidang deleted successfully');
    }
}
