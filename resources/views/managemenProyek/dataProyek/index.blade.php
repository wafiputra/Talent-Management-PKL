@extends('master')
@section('content')
<section class="section">
    <div class="section-header">
        <h1>Data Projek</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Bootstrap Components</a></div>
            <div class="breadcrumb-item">Form</div>
        </div>
    </div>

</section>
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Table Data Projek</h4>
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
                                    <th>No</th>
                                    <th>Client</th>
                                    <th>Nama</th>
                                    <th>Platform</th>
                                    <th>Tanggal Mulai</th>
                                    <th>Tanggal Selesai</th>
                                    <th>Deskripsi</th>
                                    <th class="w-1">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dataP as $dp)
                                <tr>
                                    <td data-label="Nomor">
                                        <div class="d-flex py-1 align-items-center">
                                            <div class="flex-fill">
                                                <div class="font-weight-medium">{{ ++$i }}</div>
                                            </div>
                                        </div>
                                    </td>

                                    <td data-label="Client">
                                        <div class="d-flex py-1 align-items-center">
                                            <div class="flex-fill">
                                                <div class="font-weight-medium">{{ $dp->idClient }}</div>
                                            </div>
                                        </div>
                                    </td>

                                    <td data-label="nama">
                                        <div class="font-weight-medium">{{ $dp->nama }}</div>
                                    </td>

                                    <td data-label="Platform">
                                        <div class="font-weight-medium">{{ $dp->platform }}</div>
                                    </td>

                                    <td data-label="Tanggal Mulai">
                                        <div class="font-weight-medium">{{ $dp->tanggalmulai }}</div>
                                    </td>

                                    <td data-label="Tanggal Selesai">

                                        <div class="font-weight-medium">{{ $dp->tanggalselesai }}</div>
                                    </td>

                                    <td data-label="Deskripsi">

                                        <div class="font-weight-medium">{{ $dp->deskripsi }}</div>
                                    </td>

                                    <td>
                                        <form action="{{ route('dataProyek.destroy',$dp->id) }}" method="POST">
                                            @can('dataProyek-edit')

                                            <a class="btn btn-success custom-btn" href="{{ route('dataProyek.edit',$dp->id) }}">
                                                <i class="far fa-edit"><?php var_dump($dp->id) ?></i>
                                            </a>
                                            @endcan
                                            @csrf
                                            @method('DELETE')
                                            @can('dataProyek-delete')
                                            <button type="submit" class="btn btn-danger custom-btn">
                                                <i class="far fa-trash-alt"></i>
                                            </button>
                                            @endcan
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="card-footer text-center">
                            @can('dataProyek-create')
                                <a class="btn btn-primary" href="{{ route('dataProyek.create') }}">Tambah</a>
                            @endcan
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
