@extends('master')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Data Client</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Bootstrap Components</a></div>
            <div class="breadcrumb-item">Form</div>
        </div>
    </div>
</section>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>Table Data Client</h4>
                <div class="card-header-action">
                    <form >
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search">
                            <div class="input-group-btn">
                                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped" id="sortable-table">
                        <thead>
                            <tr>
                                <th>Nomor</th>
                                <th>Name</th>
                                <th>Instansi</th>
                                <th>Alamat</th>
                                <th>Kabupaten</th>
                                <th>Provinsi</th>
                                <th>No.Telp</th>
                                <th>Email</th>
                                <th>Projek</th>
                                <th class="w-1">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($client as $c)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $c->nama }}</td>
                                    <td>{{ $c->instansi }}</td>
                                    <td>{{ $c->alamat }}</td>
                                    <td>{{ $c->kabupaten }}</td>
                                    <td>{{ $c->provinsi }}</td>
                                    <td>{{ $c->telepon }}</td>
                                    <td>{{ $c->email }}</td>
                                    <td>{{ $c->project }}</td>
                                    <td>
                                        <form action="{{ route('client.destroy',$c->id) }}" method="POST">
                                            {{-- <a class="btn btn-info" href="{{ route('client.show',$c->id) }}">Show</a> --}}
                                            @can('client-edit')
                                            <a class="btn btn-success custom-btn" href="{{ route('client.edit',$c->id) }}">
                                                <i class="far fa-edit"></i>
                                            </a>
                                            @endcan
                                            @csrf
                                            @method('DELETE')
                                            @can('client-delete')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                            @endcan
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                        </tbody>
                    </table>
                    <div class="card-footer text-center">
                        @can('client-create')
                        <a class="btn btn-primary" href="{{ route('client.create') }}"> Tambah</a>
                        @endcan
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
