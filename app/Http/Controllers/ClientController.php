<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use Laravolt\Indonesia\Models\Province;
use Laravolt\Indonesia\Models\City;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ClientController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:client-list|client-create|client-edit|client-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:client-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:client-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:client-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $client = Client::latest()->paginate(5);
        return view('client.index', compact('client'))->with('i', (request()->input('page', 1) - 1) * 5);
        //echo "test";
    }

    public function create()
    {
        $provinces = Province::pluck('name', 'id');
        return view('client.create',compact('provinces'));
    }

    public function show(Client $client)
    {
        return view('client.show', compact('client'));
    }

    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('client.index')
            ->with('success', 'Client deleted successfully');
    }
    public function edit(Client $client)
    {
        $provinces = Province::pluck('name', 'id');
        return view('client.edit', compact('client','provinces'));
    }

    public function store(Request $request)
    {
        request()->validate([
            'nama' => 'required',
            'instansi' => 'required',
            'alamat' => 'required',
            'provinsi' => 'required',
            'kabupaten' => 'required',
            'telepon' => 'required',
            'email' => 'required',
            'project' => 'required',
        ]);
        Client::create($request->all()); // eloquent

        return redirect()->route('client.index')
            ->with('success', 'Client created successfully.');
    }

    public function update(Request $request, Client $client)
    {
        request()->validate([
            'nama' => 'required',
            'instansi' => 'required',
            'alamat' => 'required',
            'kabupaten' => 'required',
            'provinsi' => 'required',
            'telepon' => 'required',
            'email' => 'required',
            'project' => 'required',
        ]);

        $client->update($request->all());

        return redirect()->route('client.index')
            ->with('success', 'Client updated successfully');
    }
    // public function show(Client $client)
    // {
    //     return view('client.show', compact('client'));
    // }

}
