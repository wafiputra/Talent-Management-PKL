@extends('master')
@section('content')
<section class="section">
    <div class="section-header">
        <h1>Data Pendidikan</h1>
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
                    <h4>Table Data Pendidikan</h4>
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
                                    <th>Nama</th>
                                    <th>Nama Sekolah</th>
                                    <th>Jurusan</th>
                                    <th>Tahun Masuk</th>
                                    <th>Tahun Lulus</th>
                                    <th class="w-1">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($datapendidikan as $d)
                                <tr>
                                    <td data-label="Nama">
                                        <div class="d-flex py-1 align-items-center">
                                            <!-- <span class="avatar me-2" style="background-image: url(./static/avatars/010m.jpg)"></span> -->
                                            <div class="flex-fill">
                                                <div class="font-weight-medium">{{ $d->idpengguna }}</div>
                                                <!-- <div class="text-muted"><a href="#" class="text-reset">tkeelf@blogger.com</a></div> -->
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="font-weight-medium">{{ $d->namasekolah }}</div>
                                    </td>
                                    <td>
                                        <div class="font-weight-medium">{{ $d->jurusan }}</div>
                                    </td>
                                    <td>
                                        <div class="font-weight-medium">{{ $d->tahunmasuk }}</div>
                                    </td>
                                    <td>
                                        <div class="font-weight-medium">{{ $d->tahunlulus }}</div>
                                    </td>
                                    <td>
                                        <form action="{{ route('datapendidikan.destroy',$d->id) }}" method="POST">
                                            @can('datapendidikan-edit')
                                            <a class="btn btn-primary" href="{{ route('datapendidikan.edit',$d->id) }}">Edit</a>
                                            @endcan

                                            @csrf
                                            @method('DELETE')
                                            @can('datapendidikan-delete')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                            @endcan
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="card-footer text-center">
                            <button class="btn btn-primary">Tambah</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection