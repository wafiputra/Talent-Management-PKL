@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit jabatan</h2>
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
        <form action="{{ route('jabatan.update',$jabatan->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-header">
                <h4>Edit Data Jabatan</h4>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" value="{{ $jabatan->nama }}" required>
                </div>
                <div class="form-group">
                    <label>ID Jabatan</label>
                    <div class="selectgroup selectgroup-pills"><br>
                        <input type="checkbox" id="1" name="1" value="1">
                        <span class="checkbox1"></span>
                        <label for="vehicle1"> 1</label>
                        <input type="checkbox" id="2" name="2" value="2">
                        <span class="checkbox2"></span>
                        <label for="vehicle2"> 2</label>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label>ID Parent Jabatan</label>
                    <div class="selectgroup selectgroup-pills"><br>
                        <input type="checkbox" id="1" name="1" value="1">
                        <label for="vehicle1"> 1</label>
                        <input type="checkbox" id="2" name="2" value="2">
                        <label for="vehicle2"> 2</label>
                        </label>
                    </div>
                    </div>
                <div class="form-group">
                    <label>Keterangan</label>
                    <input type="email" class="form-control" required value="{{ $jabatan->keterangan }}">
                </div>
                <div class="form-group">
                    <label>Minimum Experience</label>
                    <input type="email" class="form-control" value="{{ $jabatan->minimumexperience }}">
                </div>
            </div>
            <div class="card-footer text-center">
                <button class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection