@extends('master')
@section('content')
<section class="section">
    <div class="section-header">
        <h1>Form Data</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Bootstrap Components</a></div>
            <div class="breadcrumb-item">Form</div>
        </div>
    </div>
</section>
<div class="section-body">
    <div class="card">
        <form action="{{ route("client.edit")}}" method="POST">
            @csrf
            <div class="card-header">
                <h4>Edit Data Client</h4>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" value="{{ $client->nama }}"class="form-control" required="">
                </div>
                <div class="form-group">
                    <label>Instansi</label>
                    <input type="text" value="{{ $client->instansi }}" class="form-control" required="">
                </div>
                <div class="form-group mb-0">
                    <label>Alamat</label>
                    <textarea class="form-control" value="{{ $client->alamat }}" required=""></textarea>
                </div>
                <div class="form-group">
                    <label>Kabupaten/kota</label>
                    <select class="form-control">
                        <option>Pilih kabupaten/Kota</option>
                        <option>Kab.Banyumas</option>
                        <option>Kab.Tegal</option>
                        <option>Kab.Brebes</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Provinsi</label>
                    <select class="form-control">
                        <option>Pilih Provinsi</option>
                        <option>Jawa Tengah</option>
                        <option>Jawa Timur</option>
                        <option>Jawa Barat</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>No.Telpon</label>
                    <input type="text" value="{{ $client->telepon }}" class="form-control">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" value="{{ $client->Email }}" class="form-control" required="">
                </div>
                <div class="form-group">
                    <label>Projek</label>
                    <input type="text" value="{{ $client->project }}" class="form-control">
                </div>
            </div>
            <div class="card-footer text-center">
                <button class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>
@endsection