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
