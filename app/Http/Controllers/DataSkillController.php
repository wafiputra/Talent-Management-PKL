<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataSkillController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:dataSkill-list|dataSkill-create|dataSkill-edit|dataSkill-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:dataSkill-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:dataSkill-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:dataSkill-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $bidang = DataP::latest()->paginate(5);
        return view('dataSkill.index');
        // , compact('bidang')
        //     ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
