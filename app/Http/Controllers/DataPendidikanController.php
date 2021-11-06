<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        // $bidang = DataP::latest()->paginate(5);
        return view('dataPendidikan.index');
        // , compact('bidang')
        //     ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
