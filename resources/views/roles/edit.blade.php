@extends('master')
@section('content')
<section class="section">
    <div class="section-header">
        <h1>Role</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Bootstrap Components</a></div>
            <div class="breadcrumb-item">from</div>
        </div>
    </div>
</section>

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

<div class="section-body">
    <div class="card">
        {!! Form::model($role, ['method' => 'PATCH','route' => ['roles.update', $role->id]]) !!}
            <div class="card-header">
                <h4>Edit Role</h4>
            </div>
            <div class="card-body">

                <div class="form-group">
                    <label>Nama Role</label>
                    {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                    <label>Permission</label>
                    <div class="selectgroup selectgroup-pills">
                        <div>
                            <div style="float: left;">
                                @foreach($permission as $value)
                                    <label>{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                    {{ $value->name }}</label>
                                <br/>
                                @endforeach
                            </div>

                            {{-- <div style="float: left; padding-left: 3%;">
                                <input type="checkbox" id="rolelist" name="rolelist" value="rolelist">
                                <label for="5"> Role List</label>
                                <br>
                                <input type="checkbox" id="rolecreate" name="rolecreate" value="rolecreate">
                                <label for="6"> Role Create</label>
                                <br>
                                <input type="checkbox" id="roleupdate" name="roleupdate" value="roleupdate">
                                <label for="7"> Role Update</label>
                                <br>
                                <input type="checkbox" id="roledelete" name="roledelete" value="roledelete">
                                <label for="8"> Role Delete</label>
                            </div>

                            <div style="float: left; padding-left: 3%;">
                                <input type="checkbox" id="productlist" name="productlist" value="productlist">
                                <label for="9"> Product List</label>
                                <br>
                                <input type="checkbox" id="productcreate" name="productcreate" value="productcreate">
                                <label for="10"> Product Create</label>
                                <br>
                                <input type="checkbox" id="productupdate" name="productupdate" value="productupdate">
                                <label for="11"> Product Update</label>
                                <br>
                                <input type="checkbox" id="productdelete" name="productdelete" value="productdelete">
                                <label for="12"> Product Delete</label>
                            </div>

                            <div style="float: left; padding-left: 3%;">
                                <input type="checkbox" id="bidanglist" name="bidanglist" value="bidanglist">
                                <label for="13"> Bidang List</label>
                                <br>
                                <input type="checkbox" id="bidangcreate" name="bidangcreate" value="bidangcreate">
                                <label for="14"> Bidang Create</label>
                                <br>
                                <input type="checkbox" id="bidangupdate" name="bidangupdate" value="bidangupdate">
                                <label for="15"> Bidang Update</label>
                                <br>
                                <input type="checkbox" id="bidangdelete" name="bidangdelete" value="bidangdelete">
                                <label for="16"> Bidang Delete</label>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div style="clear:both;"></div>
            <div class="card-footer text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        {!! Form::close() !!}
    </div>
</div>
@endsection
