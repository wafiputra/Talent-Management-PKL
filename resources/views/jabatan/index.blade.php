@extends('master')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Data Jabatan</h1>
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
                <h4>Table Data Jabatan</h4>
                <div class="card-header-action">
                    <form>
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
                                <th>Nama Jabatan</th>
                                <th>ID Jabatan</th>
                                <th>ID Parent Jabatan </th>
                                <th>Parant Jabatan</th>
                                <th>Keterangan</th>
                                <th>Experience</th>
                                <th class="w-1">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($jabatan as $jabatan)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $jabatan->nama }}</td>
                                <td>{{ $jabatan->idparentjabatan }}</td>
                                <td>{{ $jabatan->parentjabatan }}</td>
                                <td>{{ $jabatan->keterangan }}</td>
                                <td>{{ $jabatan->minexp }}</td>
                                <td>
                                    <form action="{{ route('jabatan.destroy',$jabatan->id) }}" method="POST">
                                        <a class="btn btn-info" href="{{ route('jabatan.show',$jabatan->id) }}">Show</a>
                                        @can('jabatan-edit')
                                        <a class="btn btn-primary" href="{{ route('jabatan.edit',$jabatan->id) }}">Edit</a>
                                        @endcan

                                        @csrf
                                        @method('DELETE')
                                        @can('jabatan-delete')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                        @endcan
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="card-footer text-center">
                        @can('jabatan-create')
                            <a class="btn btn-primary" href="{{ route('jabatan.create') }}"> Tambah</a>
                        @endcan
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
