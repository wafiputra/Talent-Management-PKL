@extends('master')
@section('content')
<section class="section">
    <div class="section-header">
        <h1>Data Personil</h1>
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
                    <h4>Table Data Personil</h4>
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
                                    <th>TTL</th>
                                    <th>Jenis Kelamin</th>
                                    <th>No Telpon</th>
                                    <th>Email</th>
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
                                    <td data-label="TTL">

                                        <div class="font-weight-medium">Banyumas 3 juni 1990</div>
                                    </td>
                                    <td data-label="Jenis Kelamin">

                                        <div class="font-weight-medium">laki laki</div>
                                    </td>
                                    <td data-label="No Telpon">

                                        <div class="font-weight-medium">08131243543</div>
                                    </td>
                                    <td data-label="Email">

                                        <div class="font-weight-medium">asdasd@gmail.com</div>
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
                                    <td data-label="TTL">

                                        <div class="font-weight-medium">Banyumas 3 juni 1990</div>
                                    </td>
                                    <td data-label="Jenis Kelamin">

                                        <div class="font-weight-medium">laki laki</div>
                                    </td>
                                    <td data-label="No Telpon">

                                        <div class="font-weight-medium">08131243543</div>
                                    </td>
                                    <td data-label="Email">

                                        <div class="font-weight-medium">asdasd@gmail.com</div>
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