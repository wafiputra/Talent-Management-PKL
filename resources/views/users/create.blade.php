{{-- @extends('layouts.app')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Create New User</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
        </div>
    </div>
</div>


@if (count($errors) > 0)
  <div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
       @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
       @endforeach
    </ul>
  </div>
@endif



{!! Form::open(array('route' => 'users.store','method'=>'POST')) !!}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Email:</strong>
            {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Password:</strong>
            {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Confirm Password:</strong>
            {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Role:</strong>
            {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
{!! Form::close() !!}

@endsection --}}

@extends('master')

@section('content')

@push('page-scrips')
<script>
window.addEventListener('DOMContentLoaded', function() {
    $(function () {
        $.ajaxSetup({
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
        });

        $('#province').on('change', function () {
            $.ajax({
                url: '{{ route('dependent-dropdown.stor') }}',
                method: 'POST',
                data: {id: $(this).val()},
                success: function (response) {
                    $('#city').empty();

                    $.each(response, function (id, name) {
                        $('#city').append(new Option(name, id))
                    })
                }
            })
        });
    });
});

    // $(function () {
    //     $.ajaxSetup({
    //         headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
    //     });

    //     $('#province').on('change', function () {
    //         $.ajax({
    //             url: '{{ route('dependent-dropdown.stor') }}',
    //             method: 'POST',
    //             data: {id: $(this).val()},
    //             success: function (response) {
    //                 $('#city').empty();

    //                 $.each(response, function (id, name) {
    //                     $('#city').append(new Option(name, id))
    //                 })
    //             }
    //         })
    //     });
    // });
</script>
@endpush

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
        <form action="{{ route('users.create')}}" method="POST">
            <div class="card-header">
                <h4>Isi Data Pengguna</h4>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Jabatan</label>
                    <select class="form-control">
                        <option>Senior Developer</option>
                        <option>Junior Developer</option>
                        <option>Magang</option>
                    </select>
                </div>
                <div class="form-group ">
                    <label>Alamat</label>
                    <textarea class="form-control" required=""></textarea>
                </div>
                <div class="form-group">
                    <label>Provinsi</label>
                    <select name="province" id="province" class="form-control">
                        <option>Pilih Provinsi</option>
                        @foreach ($provinces as $id => $name)
                            <option value="{{ $id }}">{{ $name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Kabupaten/kota</label>
                    <select name="city" id="city" class="form-control">
                        <option>Pilih kabupaten</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>No.Telpon</label>
                    <input type="email" class="form-control">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" required="">
                </div>
                <div class="form-group">
                    <label>Projek</label>
                    <input type="email" class="form-control">
                </div>
            </div>
            <div class="card-footer text-center">
                <button class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection
