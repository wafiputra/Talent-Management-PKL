@extends('master')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Dashboard</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Bootstrap Components</a></div>
            <div class="breadcrumb-item">Form</div>
        </div>
    </div>

</section>
<div class="container-xl">
    <!-- Page title -->
    <div class="page-header d-print-none">
        <div class="row align-items-center"></div>
    </div>
</div>
<br>
<div class="page-body">
    <div class="container-xl">
        <div class="row row-deck row-cards">
            <div class="col-sm-12 col-lg-6">
                <div class="card">
                    <div class="progress progress-sm card-progress">
                        <div class="progress-bar" style="width: 100%" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                            <span class="visually-hidden"></span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="h2 mb-1" id="greetings">Projek Status</div>
                        </div>
                        <div class="row">
                            <div class="h3 col-sm-8" id="Name">Mobile</div>
                            <div class="h3 text-end" id="Status">Complate</div>
                        </div>

                        <div class="d-flex align-items-center">
                            <div class="subheader">20 May 2021</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-6">
                <div class="card">
                    <div class="progress progress-sm card-progress">
                        <div class="progress-bar" style="width: 100%" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                            <span class="visually-hidden"></span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="h2 mb-1" id="greetings">Projek Experience</div>
                        </div>
                        <div class="h3 mb-1" id="clock">01:39:13 WIB</div>
                        <div class="d-flex align-items-center">
                            <div class="subheader">20 May 2021</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-6">
                <div class="card">
                    <div class="progress progress-sm card-progress">
                        <div class="progress-bar" style="width: 100%" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                            <span class="visually-hidden"></span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="h2 mb-1" id="greetings">Learning Path</div>
                        </div>
                        <div class="h3 mb-1" id="clock">01:39:13 WIB</div>
                        <div class="d-flex align-items-center">
                            <div class="subheader">20 May 2021</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
