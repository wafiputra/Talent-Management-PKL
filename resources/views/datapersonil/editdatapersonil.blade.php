@extends('master')
@section('content')
<section class="section">
    <div class="section-header">
        <h1>Edit Data Personil</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Bootstrap Components</a></div>
            <div class="breadcrumb-item">Form</div>
        </div>
    </div>
    <div class="row">
        <div class=" col-md-12">
            <div class="card">

                <div class="card-body">
                    <ul class="nav nav-pills" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pribadi-tab" data-toggle="tab" href="#pribadi" role="tab" aria-controls="pribadi" aria-selected="true">Data Pribadi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pendidikan-tab" data-toggle="tab" href="#pendidikan" role="tab" aria-controls="pendidikan" aria-selected="false">Data Pendidikan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="skills-tab" data-toggle="tab" href="#skills" role="tab" aria-controls="skills" aria-selected="false">Data Skills</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="portofolio-tab" data-toggle="tab" href="#portofolio" role="tab" aria-controls="portofolio" aria-selected="false">Portofolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="kontrak-tab" data-toggle="tab" href="#kontrak" role="tab" aria-controls="kontrak" aria-selected="false">Kontrak</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="pribadi" role="tabpanel" aria-labelledby="pribadi-tab">
                            <div class="row">
                                <div class=" col-12">
                                    <div class="card">
                                        <form>
                                            <div class="card-header">
                                                <h4>Data Pribadi</h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label>Nama</label>
                                                    <input type="text" class="form-control" required="">
                                                </div>
                                                <div class="form-group">
                                                    <label>Tempat Tanggal Lahir</label>
                                                    <input type="text" class="form-control datepicker">
                                                </div>
                                                <div class="form-group">
                                                    <label>Jenis Kelamin</label>
                                                    <div class="selectgroup selectgroup-pills"><br>
                                                        <input type="checkbox" id="laki" name="laki" value="laki">
                                                        <label for="1"> Laki-laki</label>
                                                        <input type="checkbox" id="perempuan" name="perempuan" value="perempuan">
                                                        <label for="2"> Perempuan</label>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label>Alamat Asal</label>
                                                    <textarea class="form-control" required=""></textarea>
                                                </div>
                                                <div class="form-group ">
                                                    <label>Alamat Domisili</label>
                                                    <textarea class="form-control" required=""></textarea>
                                                </div>

                                                <div class="form-group">
                                                    <label>No.Telpon</label>
                                                    <input type="email" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input type="email" class="form-control" required="">
                                                </div>

                                            </div>
                                            <div class="card-footer text-center">
                                                <button class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade " id="pendidikan" role="tabpanel" aria-labelledby="pendidikan-tab">
                            <div class="row">
                                <div class=" col-12">
                                    <div class="card">
                                        <form>
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
                                                    <label>SD</label>
                                                    <div class="row">
                                                        <div class="col-sm-12 col-md-6">
                                                            <input type="text" class="form-control" required="">
                                                        </div>
                                                        <div class="col-sm-6 col-md-2">
                                                            <input type="text" class="form-control" required="">

                                                        </div>
                                                        <div class="col-sm-6 col-md-2">
                                                            <input type="text" class="form-control" required="">

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>SMP</label>
                                                    <div class="row">
                                                        <div class="col-sm-12 col-md-6">
                                                            <input type="text" class="form-control" required="">
                                                        </div>
                                                        <div class="col-sm-6 col-md-2">
                                                            <input type="text" class="form-control" required="">

                                                        </div>
                                                        <div class="col-sm-6 col-md-2">
                                                            <input type="text" class="form-control" required="">

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>SMA/SMK</label>
                                                    <div class="row">
                                                        <div class="col-sm-12 col-md-6">
                                                            <input type="text" class="form-control" required="">
                                                        </div>
                                                        <div class="col-sm-6 col-md-2">
                                                            <input type="text" class="form-control" required="">

                                                        </div>
                                                        <div class="col-sm-6 col-md-2">
                                                            <input type="text" class="form-control" required="">

                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="form-group">
                                                    <label>Kuliah</label>
                                                    <div class="row">
                                                        <div class="col-sm-12 col-md-6">
                                                            <input type="text" class="form-control" required="">
                                                        </div>
                                                        <div class="col-sm-6 col-md-2">
                                                            <input type="text" class="form-control" required="">

                                                        </div>
                                                        <div class="col-sm-6 col-md-2">
                                                            <input type="text" class="form-control" required="">

                                                        </div>
                                                        <div class="col-sm-6 col-md-2">
                                                            <input type="text" class="form-control" required="">

                                                        </div>
                                                    </div>
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
                        <div class="tab-pane fade " id="skills" role="tabpanel" aria-labelledby="skills-tab">
                            <div class="row">
                                <div class=" col-12">
                                    <div class="card">
                                        <form>
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
                            </div>
                        </div>
                        <div class="tab-pane fade " id="portofolio" role="tabpanel" aria-labelledby="portofolio-tab">
                            <div class="row">
                                <div class=" col-12">
                                    <div class="card">
                                        <form>
                                            <div class="card-header">
                                                <h4>Portofolio</h4>
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
                                                    <label>Nama Projek</label>
                                                    <input type="text" class="form-control" required="">
                                                </div>
                                                <div class="form-group">
                                                    <label>Client</label>
                                                    <input type="text" class="form-control" required="">
                                                </div>
                                                <div class="form-group">
                                                    <label>Tanggal Projek</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <i class="fas fa-calendar"></i>
                                                            </div>
                                                        </div>
                                                        <input type="text" class="form-control datepicker">
                                                    </div>

                                                </div>
                                                <div class="form-group">
                                                    <label>Link Projek</label>
                                                    <input type="text" class="form-control" required="">
                                                </div>
                                            </div>
                                            <div class="card-footer text-center">
                                                <button class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade " id="kontrak" role="tabpanel" aria-labelledby="kontrak-tab">
                            <div class="row">
                                <div class=" col-12">
                                    <div class="card">
                                        <form>
                                            <div class="card-header">
                                                <h4>Kontrak</h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label>Tanggal Mulai</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <i class="fas fa-calendar"></i>
                                                            </div>
                                                        </div>
                                                        <input type="text" class="form-control datepicker">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Tanggal Selesai</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <i class="fas fa-calendar"></i>
                                                            </div>
                                                        </div>
                                                        <input type="text" class="form-control datepicker">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Upload Document</label>
                                                    <!-- <div class="col-md-1">
                                                            Upload Foto
                                                        </div> -->
                                                    <!-- <div class="col-sm-6 col-md-6"> -->
                                                    <div class="custom-file">
                                                        <input type="file" name="site_logo" class="custom-file-input" id="site-logo">
                                                        <label class="custom-file-label">Choose File</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Riwayat Kontrak</label>
                                                    <div class="card-body p-0">
                                                        <div class="table-responsive">
                                                            <table class="table table-striped" id="sortable-table">
                                                                <thead>
                                                                    <tr>


                                                                        <th>Mulai</th>
                                                                        <th>Selesai</th>
                                                                        <th>Document</th>

                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>

                                                                        <td data-label="Mulai">

                                                                            <div class="font-weight-medium">3 juni 2020</div>
                                                                        </td>
                                                                        <td data-label="Selesai">

                                                                            <div class="font-weight-medium">3 juli 2020</div>
                                                                        </td>
                                                                        <td data-label="Document">

                                                                            <div class="font-weight-medium">ntah.pdf</div>
                                                                        </td>

                                                                    </tr>


                                                                </tbody>
                                                            </table>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer text-center">
                                                <button class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

</section>




@endsection