@extends('master')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Sign Projek</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Bootstrap Components</a></div>
            <div class="breadcrumb-item">Form</div>
        </div>
    </div>

</section>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>Table Sign Projek</h4>

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
            <h5> Nama Projek = {{$data->nama}} </h5>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped" id="sortable-table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Talent</th>
                                <th>Jabatan</th>
                                <th class="w-1">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach ($data as $d) --}}
                            <tr>
                                <td data-label="Nomor">
                                    <div class="d-flex py-1 align-items-center">
                                        <div class="flex-fill">
                                            <div class="font-weight-medium">1</div>
                                        </div>
                                    </div>
                                </td>
                                <td data-label="Nama Talent">
                                    <div class="d-flex py-1 align-items-center">
                                        <div class="flex-fill">
                                            <div class="font-weight-medium">Talent</div>
                                        </div>
                                    </div>
                                </td>
                                <td data-label="Jabatan">

                                    <div class="font-weight-medium">Jabatan</div>
                                </td>

                                <td>
                                    <div class="btn-list flex-nowrap">
                                        <a href="{{ route('signProject.create', ) }}" class="btn btn-primary custom-btn">
                                            <i class="fas fa-plus"></i>
                                        </a>
                                        <a href="#" class="btn btn-success custom-btn">
                                            <i class="far fa-edit"></i>
                                        </a>
                                        <a href="#" class="btn btn-danger custom-btn">
                                            <i class="far fa-trash-alt"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            {{-- @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
