<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortofolioController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:portofolio-list|portofolio-create|portofolio-edit|portofolio-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:portofolio-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:portofolio-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:portofolio-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $bidang = DataP::latest()->paginate(5);
        return view('portofolio.index');
        // , compact('bidang')
        //     ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
