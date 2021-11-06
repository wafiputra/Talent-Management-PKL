<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataPersonilController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:dataPersonil-list|dataPersonil-create|dataPersonil-edit|dataPersonil-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:dataPersonil-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:dataPersonil-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:dataPersonil-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $bidang = DataP::latest()->paginate(5);
        return view('dataPersonil.index');
        // , compact('bidang')
        //     ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
