@extends('master')


@section('content')
@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif

<section class="section">
    <div class="section-header">
        <h1>Data Pengguna</h1>
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
                <h4>Tabel Data Pengguna</h4>
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
                                <th>No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Roles</th>
                                <th class="w-1">Action</th>
                            </tr>
                        </thead>
                        @foreach ($data as $key => $user)
                        <tbody>
                            <tr>
                                <td data-label="Name">
                                    <div class="d-flex py-1 align-items-center">
                                        <div class="flex-fill">
                                            <div class="font-weight-medium">{{ ++$i }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td data-label="Projek">

                                    <div class="font-weight-medium">{{ $user->name }}</div>
                                </td>
                                <td data-label="No.Telp">

                                    <div class="font-weight-medium">{{ $user->email }}</div>
                                </td>
                                <td data-label="Email">
                                    @if(!empty($user->getRoleNames()))
                                        @foreach($user->getRoleNames() as $v)
                                            <label class="badge badge-success">{{ $v }}</label>
                                        @endforeach
                                    @endif
                                </td>
                                <td>
                                    <div class="btn-list flex-nowrap">
                                        @can('user-edit')
                                        <a href="{{ route('users.edit',$user->id) }}" class="btn btn-success custom-btn">
                                            <i class="far fa-edit"></i>
                                        </a>
                                        @endcan
                                        @can('user-delete')
                                        {{-- <a href="#" class="btn btn-danger custom-btn">
                                            <i class="far fa-trash-alt"></i>
                                        </a> --}}
                                        {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
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
                            <a class="btn btn-primary" href="{{ route('users.create') }}"> Create New User</a>
                        @endcan
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{!! $data->render() !!}

@endsection
