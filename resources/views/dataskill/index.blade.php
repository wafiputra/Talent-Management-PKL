@extends('master')
@section('content')
<section class="section">
    <div class="section-header">
        <h1>Data Skills</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Bootstrap Components</a></div>
            <div class="breadcrumb-item">Form</div>
        </div>
    </div>

</section>
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Table Data Skills</h4>
                    <div class="card-header-action">
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search">
                                <div class="input-group-btn">
                                    <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped" id="sortable-table">
                            <thead>
                                <tr>

                                    <th>Nama</th>
                                    <th>Platform</th>
                                    <th>Bahasa Pemrograman</th>

                                    <th class="w-1">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td data-label="Nama">
                                        <div class="d-flex py-1 align-items-center">
                                            <!-- <span class="avatar me-2" style="background-image: url(./static/avatars/010m.jpg)"></span> -->
                                            <div class="flex-fill">
                                                <div class="font-weight-medium">Thatcher Keel</div>
                                                <!-- <div class="text-muted"><a href="#" class="text-reset">tkeelf@blogger.com</a></div> -->
                                            </div>
                                        </div>
                                    </td>
                                    <td data-label="Platform">

                                        <div class="font-weight-medium">Android</div>
                                    </td>
                                    <td data-label="Bahasa Pemrograman">

                                        <div class="font-weight-medium">java</div>
                                    </td>



                                    <td>

                                        <div class="btn-list flex-nowrap">
                                            <a href="#" class="btn btn-success custom-btn">
                                                <i class="far fa-edit"></i>
                                            </a>
                                            <a href="#" class="btn btn-danger custom-btn">
                                                <i class="far fa-trash-alt"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td data-label="Nama">
                                        <div class="d-flex py-1 align-items-center">
                                            <!-- <span class="avatar me-2" style="background-image: url(./static/avatars/010m.jpg)"></span> -->
                                            <div class="flex-fill">
                                                <div class="font-weight-medium">Thatcher Keel</div>
                                                <!-- <div class="text-muted"><a href="#" class="text-reset">tkeelf@blogger.com</a></div> -->
                                            </div>
                                        </div>
                                    </td>
                                    <td data-label="Platform">

                                        <div class="font-weight-medium">Game</div>
                                    </td>
                                    <td data-label="Bahasa Pemrograman">

                                        <div class="font-weight-medium">c#</div>
                                    </td>
                                    <td>

                                        <div class="btn-list flex-nowrap">
                                            <a href="#" class="btn btn-success custom-btn">
                                                <i class="far fa-edit"></i>
                                            </a>
                                            <a href="#" class="btn btn-danger custom-btn">
                                                <i class="far fa-trash-alt"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                        <div class="card-footer text-center">
                            <button class="btn btn-primary">Tambah</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection