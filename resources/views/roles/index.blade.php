@extends('master')


@section('content')
@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif


<section class="section">
    <div class="section-header">
        <h1>Data Role</h1>
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
                <h4>Tabel Data Role</h4>
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
                    <table class="table table-striped w-right" id="sortable-table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th style="text-align: center">Role</th>
                                <th style="text-align: center">Action</th>
                            </tr>
                        </thead>
                        @foreach ($roles as $key => $role)
                        <tbody>
                            <tr>
                                <td style="text-align:center;" data-label="No">
                                    <div class="d-flex py-1 align-items-center">
                                        <div class="flex-fill">
                                            <div class="font-weight-medium">
                                                {{ ++$i }}
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td style="text-align:center;" data-label="Role">
                                    <a href="#" class="btn btn-success" style="font-size: 12px;
                                    border-radius: 30px !important;
                                    padding-left: 13px !important;
                                    padding-right: 13px !important;">
                                        {{ $role->name }}
                                    </a>
                                </td>

                                <td style="text-align:center;">
                                    <div class="btn-list flex-nowrap">
                                        @can('role-edit')
                                        <a href="{{ route('roles.edit',$role->id) }}" class="btn btn-success custom-btn">
                                            <i class="far fa-edit"></i>
                                        </a>
                                        @endcan
                                        @can('role-delete')
                                        {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                        {!! Form::close() !!}
                                        @endcan
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                    <div class="card-footer text-center">
                        @can('user-create')
                            <a class="btn btn-primary" href="{{ route('roles.create') }}"> Create New User</a>
                        @endcan
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{!! $roles->render() !!}

@endsection
