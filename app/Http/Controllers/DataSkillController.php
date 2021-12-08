<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataSkill;

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
        $dataskill = DataSkill::latest()->paginate(5);
        return view('dataSkill.index',compact('dataskill'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        return view('dataSkill.create');
    }
    
    public function show(DataSkill $dataskill)
    {
        return view('dataSkill.show', compact('dataskill'));
    }

      public function destroy(DataSkill $dataskill)
    {
        $dataskill->delete();
        return redirect()->route('dataSkill.index')
            ->with('success', 'DataSkill Deleted Successfully');
    }
    public function edit(DataSkill $dataskill)
    {
        return view('dataSkill.edit', compact('dataskill'));
    }
    
    public function store(Request $request)
    {
        request()->validate([
            'platform' => 'required',
            'bahasapemrograman' => 'required',
            'deskripsi' => 'required',
        ]);
        //var_dump($request);
        DataSkill::create($request->all());// eloquent

        return redirect()->route('dataSkill.index')            
        ->with('success', 'Data Skills Created Successfully.');
    }
    
    public function update(Request $request, DataSkill $dataskill)
    {
        request()->validate([
            'platform' => 'required',
            'bahasapemrograman' => 'required',
            'deskripsi' => 'required',
        ]);

        $dataskill->update($request->all());

        return redirect()->route('dataSkill.index')
            ->with('success', 'Data Skill Updated Successfully');
    }
}
