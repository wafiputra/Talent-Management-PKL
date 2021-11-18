@extends('master')
@section('content')

<section class="section">
    <div class="section-header">
        <h1>Data Projek</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ url('/') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Bootstrap Components</a></div>
            <div class="breadcrumb-item">Form</div>
        </div>
    </div>

    <div class="row">
        <div class=" col-12">
            <div class="card">
                {{-- <form action="{{ route('dataProyek.update', $dataP->id) }}" method="POST"> --}}
                    @csrf
                    @method('PUT')

                    <div class="card-header">
                        <h4>Update Data Projek</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Nama Klien</label>
                                <input type="text" id="nama" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label>Instansi</label>
                                <input type="text" id="instansi" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label>No Telpon</label>
                                <input type="text" id="telepon" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                                <input type="email" id="email" class="form-control" readonly>
                        </div>

                        <div class="form-group ">
                            <label>Alamat</label>
                            <textarea class="form-control" id="alamat" readonly></textarea>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Mulai - Selesai</label>
                            <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fas fa-calendar"></i>
                                                </div>
                                            </div>
                                            <input type="text" name="tanggalmulai" class="form-control datepicker">
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-6">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fas fa-calendar"></i>
                                                </div>
                                            </div>
                                            <input type="text" name="tanggalselesai" class="form-control datepicker">
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Platform</label>
                            <select class="form-control" name="platform" id="platform">
                                <option>-- Pilih Platform --</option>
                                <option value="Website">Website</option>
                                <option value="Android">Android</option>
                                <option value="Desktop">Desktop</option>
                                <option value="IOS">IOS</option>
                            </select>
                            {{-- <div class="selectgroup selectgroup-pills">
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
                            </div> --}}
                        </div>
                        <div class="form-group">
                            <label>Nama Projek</label>
                                <input type="text" name="nama" class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                                <input type="text" name="deskripsi" class="form-control" required="">
                        </div>
                        <div class="card-footer text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
