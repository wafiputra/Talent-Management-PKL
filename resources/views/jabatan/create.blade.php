@extends('master')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('jabatan.index') }}"> Back</a>
            </div>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

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
        <form action="{{ route('jabatan.create')}}" method="POST">
            <div class="card-header">
                <h4>Pengisian Data Jabatan</h4>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" required="">
                </div>
                <div class="form-group">
                    <label>ID Jabatan</label>
                    <select class="form-control">
                        <option>--Pilih ID Jabatan--</option>
                        <option>A01</option>
                        <option>A02</option>
                        <option>B01</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>ID Parent Jabatan</label>
                    <select class="form-control">
                        <option>--Pilih ID Parent--</option>
                        <option>A01</option>
                        <option>A02</option>
                        <option>B01</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Parent</label>
                    <input type="text" class="form-control" disabled>
                </div>
                <div class="form-group">
                    <label>Keterangan</label>
                    <input type="text" class="form-control" required="">
                </div>
                <div class="form-group">
                    <label>Minimum Experience</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="card-footer text-center">
                <button class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection
