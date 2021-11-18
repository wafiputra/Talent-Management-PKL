@extends('master')
@section('content')
<section class="section">
    <div class="section-header">
        <h1>Form Data Skill</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Bootstrap Components</a></div>
            <div class="breadcrumb-item">Form</div>
        </div>
    </div>
</section>
<div class="section-body">
    <div class="card">
        <form action="{{ route('dataSkill.store') }}" method="POST">
            @csrf
            <div class="card-header">
                <h4>Pengisian Data Skills</h4>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Platform</label>
                    <input type="text" name="platform" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Bahasa Pemrograman</label>
                    <input type="text" name="bahasapemrograman" class="form-control" required>
                </div>
                <div class="form-group mb-0">
                    <label>Deskripsi</label>
                    <input type="text" name="deskripsi" class="form-control" required>
                </div>
        </form>
    </div>
</div>
@endsection