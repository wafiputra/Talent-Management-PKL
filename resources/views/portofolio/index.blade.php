@extends('master')
@section('content')
<section class="section">
    <div class="section-header">
        <h1>Master Data</h1>
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
                            <a class="nav-link active" id="profil-tab" data-toggle="tab" href="#profil" role="tab" aria-controls="profil" aria-selected="true">Profil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="editprofil-tab" data-toggle="tab" href="#editprofil" role="tab" aria-controls="editprofil" aria-selected="false"> Edit Profil</a>
                        </li>

                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="profil" role="tabpanel" aria-labelledby="profil-tab">
                            <div class="row">
                                <div class=" col-12">
                                    <div class="card">
                                        <form>
                                            <div class="card-header">
                                                <h4>Edit Profil</h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <!-- <label>Nama</label> -->
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            Nama
                                                        </div>
                                                        <div class="col-sm-12 col-md-6">
                                                            <input type="text" class="form-control" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <!-- <label>Nama</label> -->
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            Tempat Tanggal Lahir
                                                        </div>
                                                        <div class="col-sm-12 col-md-6">
                                                            <input type="text" class="form-control" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            Jenis Kelamin
                                                        </div>
                                                        <div class="selectgroup selectgroup-pills"><br>
                                                            <input type="checkbox" id="laki" name="laki" value="laki">
                                                            <label for="vehicle1"> laki-laki</label>
                                                            <input type="checkbox" id="perempuan" name="perempuan" value="perempuan">
                                                            <label for="vehicle2"> Perempuan</label>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            Agama
                                                        </div>
                                                        <div class="col-sm-12 col-md-6">
                                                            <select class="form-control">
                                                                <option>Islam</option>
                                                                <option>Kristen</option>
                                                                <option>Budha</option>
                                                                <option>Hindu</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <!-- <label>Nama</label> -->
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            Alamat
                                                        </div>
                                                        <div class="col-sm-12 col-md-6">
                                                            <textarea class="form-control" required=""></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <!-- <label>Nama</label> -->
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            No.Telephone
                                                        </div>
                                                        <div class="col-sm-12 col-md-6">
                                                            <input type="text" class="form-control" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <!-- <label>Nama</label> -->
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            Email
                                                        </div>
                                                        <div class="col-sm-12 col-md-6">
                                                            <input type="email" class="form-control" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            Upload Foto
                                                        </div>
                                                        <div class="col-sm-6 col-md-6">
                                                            <div class="custom-file">
                                                                <input type="file" name="site_logo" class="custom-file-input" id="site-logo">
                                                                <label class="custom-file-label">Choose File</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="editprofil" role="tabpanel" aria-labelledby="editprofil-tab">
                            <div class="row">
                                <div class=" col-12">
                                    <div class="card">
                                        <form>
                                            <div class="card-header">
                                                <h4>Edit Profil</h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <!-- <label>Nama</label> -->
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            Nama
                                                        </div>
                                                        <div class="col-sm-12 col-md-6">
                                                            <input type="text" class="form-control" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <!-- <label>Nama</label> -->
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            Tempat Tanggal Lahir
                                                        </div>
                                                        <div class="col-sm-12 col-md-6">
                                                            <input type="text" class="form-control" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            Jenis Kelamin
                                                        </div>
                                                        <div class="selectgroup selectgroup-pills"><br>
                                                            <input type="checkbox" id="laki" name="laki" value="laki">
                                                            <label for="vehicle1"> laki-laki</label>
                                                            <input type="checkbox" id="perempuan" name="perempuan" value="perempuan">
                                                            <label for="vehicle2"> Perempuan</label>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            Agama
                                                        </div>
                                                        <div class="col-sm-12 col-md-6">
                                                            <select class="form-control">
                                                                <option>Islam</option>
                                                                <option>Kristen</option>
                                                                <option>Budha</option>
                                                                <option>Hindu</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <!-- <label>Nama</label> -->
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            Alamat
                                                        </div>
                                                        <div class="col-sm-12 col-md-6">
                                                            <textarea class="form-control" required=""></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <!-- <label>Nama</label> -->
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            No.Telephone
                                                        </div>
                                                        <div class="col-sm-12 col-md-6">
                                                            <input type="text" class="form-control" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <!-- <label>Nama</label> -->
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            Email
                                                        </div>
                                                        <div class="col-sm-12 col-md-6">
                                                            <input type="email" class="form-control" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            Upload Foto
                                                        </div>
                                                        <div class="col-sm-6 col-md-6">
                                                            <div class="custom-file">
                                                                <input type="file" name="site_logo" class="custom-file-input" id="site-logo">
                                                                <label class="custom-file-label">Choose File</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <div class="form-group">
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
                                                </div> -->
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

</section>

@endsection