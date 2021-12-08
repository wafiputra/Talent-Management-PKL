@extends('master')

@section('content')
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
        <form action="{{ route('jabatan.store') }}" method="POST">
            @csrf
            <div class="card-header">
                <h4>Pengisian Data Jabatan</h4>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="jabatan">
                </div>
                <div class="form-group">
                    <label>ID Jabatan</label>
                    <input type="text" class="form-control" name="idparent">
                    {{-- <select name="idparent" class="form-control">
                        <option>Pilih ID Jabatan</option>
                        <option value="1">j1</option>
                    </select> --}}
                </div>
                <div class="form-group">
                    <label>ID Parent Jabatan</label>
                    <input type="text" class="form-control" name="parentjabatan">
                    {{-- <select name="parentjabatan" class="form-control"> 
                        <option>--Pilih ID Parent--</option>
                        <option value="a1">A01</option>
                        <option value="a2">A02</option>
                        <option value="a3">B01</option>
                    </select>--}}
                </div>
                <div class="form-group">
                    <label>Keterangan</label>
                    <input type="text" class="form-control" name="keterangan">
                </div>
                <div class="form-group">
                    <label>Minimum Experience</label>
                    <input type="text" name="minimumexperience" class="form-control">
                </div>
            </div>
            <div class="card-footer text-center">
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection
