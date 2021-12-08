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
<div class="section-body">
    <div class="row">
        <div class=" col-12">
            <div class="card">
                <form action="{{route ('dataPendidikan.create')}}" method="POST">
                    @csrf
                    <div class="card-header">
                        <h4>Data Pendidikan</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Nama</label>
                            <div class="row">
                                <!-- <div class="col-md-2">
                                    Nama
                                </div> -->
                                <div class="col-sm-12 col-md-6">
                                    <select class="form-control">
                                        <option>Anas</option>
                                        <option>Farhan</option>
                                        <option>Anas</option>
                                        <option>Farhan</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Nama Sekolah</label>
                            <input type="text" name="nama" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Jurusan</label>
                            <input type="text" name="nama" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Tahun Masuk</label>
                            <input type="text" name="nama" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Tahun Lulus</label>
                            <input type="text" name="nama" class="form-control" required>
                        </div>
                        
                        <div class="card-footer text-center">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
