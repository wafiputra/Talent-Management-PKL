@extends('master')
@section('content')
<section class="section">
    <div class="section-header">
        <h1>Form Data Skills</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Bootstrap Components</a></div>
            <div class="breadcrumb-item">Form</div>
        </div>
    </div>
</section>
<div class="section-body">
    <div class="card">
        <form action="{{ route("dataskill.edit",$dataskill->id)}}" method="POST">
            @csrf
            @method("PUT")
            <div class="card-header">
                <h4>Data Skills</h4>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Nama</label>
                    <select class="form-control">
                        <option>Anas</option>
                        <option>Farhan</option>
                        <option>Anas</option>
                        <option>Farhan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Platform</label>
                    <div class="selectgroup selectgroup-pills">
                        <input type="checkbox" id="web" name="web" value="web">
                        <label for="1"> web</label>
                        <br>
                        <input type="checkbox" id="android" name="android" value="android">
                        <label for="2"> Android</label>
                        <br>
                        <input type="checkbox" id="dekstop" name="dekstop" value="dekstop">
                        <label for="3"> Dekstop</label>
                        <br>
                        <input type="checkbox" id="ios" name="ios" value="ios">
                        <label for="4"> IOS</label>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label>Bahasa Pemtograman</label>
                    <input type="text" class="form-control" required="">
                </div>
                <div class="form-group mb-0">
                    <label>Deskripsi</label>
                    <textarea class="form-control" required=""></textarea>
                </div>
            </div>
            <div class="card-footer text-center">
                <button class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection
