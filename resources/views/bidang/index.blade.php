@extends('master')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Data Bidang</h1>
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
                <h4>Table Data Bidang</h4>
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
                                <th>Nama Bidang</th>
                                <th>Kategori</th>
                                <th>Keterangan</th>
                                <th>Realisasi</th>
                                <th class="w-1">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bidang as $b)
                            <tr>
                                <td data-label="Nomor">
                                    <div class="d-flex py-1 align-items-center">
                                        <!-- <span class="avatar me-2" style="background-image: url(./static/avatars/010m.jpg)"></span> -->
                                        <div class="flex-fill">
                                            <div class="font-weight-medium">{{ ++$i }}</div>
                                            <!-- <div class="text-muted"><a href="#" class="text-reset">tkeelf@blogger.com</a></div> -->
                                        </div>
                                    </div>
                                </td>
                                <td data-label="Bidang">

                                    <div class="font-weight-medium">{{ $b->nama }}</div>
                                </td>
                                <td data-label="Kategori">

                                    <div class="font-weight-medium">{{ $b->kategori }}</div>
                                </td>
                                <td data-label="Keterangan">

                                    <div class="font-weight-medium">{{ $b->keterangan }}</div>
                                </td>
                                <td data-label="Realisasi">

                                    <div class="font-weight-medium">v</div>
                                </td>
                                <td>
                                    <form action="{{ route('bidang.destroy',$b->id) }}" method="POST">
                                        @can('bidang-edit')
                                        <a class="btn btn-success custom-btn" href="{{ route('bidang.edit',$b->id) }}">
                                            <i class="far fa-edit"></i>
                                        </a>
                                        @endcan
                                        @csrf
                                        @method('DELETE')
                                        @can('bidang-delete')
                                        <button type="submit" class="btn btn-danger custom-btn">
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                        @endcan
                                    </form>
                                    {{-- <div class="btn-list flex-nowrap">
                                        <a href="#" class="btn btn-success custom-btn">
                                            <i class="far fa-edit"></i>
                                        </a>
                                        <a href="#" class="btn btn-danger custom-btn">
                                            <i class="far fa-trash-alt"></i>
                                        </a>
                                    </div> --}}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="card-footer text-center">
                        @can('bidang-create')
                            <a class="btn btn-primary" href="{{ route('bidang.create') }}">Tambah</a>
                        @endcan
                        {{-- <button class="btn btn-primary"></button> --}}
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
