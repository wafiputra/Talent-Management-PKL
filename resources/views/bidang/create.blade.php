@extends('master')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Form Input Bidang</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Bootstrap Components</a></div>
            <div class="breadcrumb-item">Form</div>
        </div>
    </div>

</section>
<div class="section-body">
    <div class="card">
        <form action="{{ route('bidang.store') }}" method="POST">
            @csrf
            <div class="card-header">
                <h4>Pengisian Data Bidang</h4>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Nama Bidang</label>
                    <input type="text" class="form-control" name="nama" required>
                </div>
                <div class="form-group">
                    <label>Kategori Bidang</label>
                    <input type="text" class="form-control" name="kategori" required>
                </div>
                <div class="form-group mb-0">
                    <label>Keterangan</label>
                    <textarea class="form-control" name="keterangan" required></textarea>
                </div>
            </div>
            <div class="card-footer text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection
