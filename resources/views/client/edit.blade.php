@extends('master')
@section('content')
@push('page-scrips')
<script>
window.addEventListener('DOMContentLoaded', function() {
    $(function () {
        $.ajaxSetup({
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
        });
        
        $('#provinsi').on('change', function () {
            console.log('test')
            $.ajax({
                url: '{{ route('dependent-dropdown.stor') }}',
                method: 'POST',
                data: {id: $(this).val()},
                success: function (response) {
                    $('#kabupaten').empty();
                    // console.log(response)
                    $.each(response, function (id, name) {
                        $('#kabupaten').append(new Option(name, id))
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
        <form action="{{ route("client.update",$client->id)}}" method="POST">
            @csrf
            @method("PUT")
            <div class="card-header">
                <h4>Edit Data Client</h4>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="nama" value="{{ $client->nama }}"class="form-control" required="">
                </div>
                <div class="form-group">
                    <label>Instansi</label>
                    <input type="text" name="instansi" value="{{ $client->instansi }}" class="form-control" required="">
                </div>
                <div class="form-group mb-0">
                    <label>Alamat</label>
                    <textarea class="form-control" name="alamat" placeholder="{{ $client->alamat }}" required=""></textarea>
                </div>

                <div class="form-group">
                    <label>Provinsi</label>
                    <select class="form-control" name="provinsi" id="provinsi">
                        <option>Pilih Provinsi</option>
                        @foreach ($provinces as $id => $name)
                        <?php
                            if($client->provinsi == $id){
                                echo '<option value="'.$id.'" selected>'.$name.'</option>';
                            }
                        ?>
                            <option value="{{ $id }}">{{ $name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Kabupaten/kota</label>
                    <select class="form-control" name="kabupaten" id="kabupaten">
                        <option>Pilih kabupaten/Kota</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>No.Telpon</label>
                    <input type="text" name="telepon" value="{{ $client->telepon }}" class="form-control">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email"value="{{ $client->email }}" class="form-control" required="">
                </div>
                <div class="form-group">
                    <label>Projek</label>
                    <input type="text" name="project"value="{{ $client->project }}" class="form-control">
                </div>
            </div>
            <div class="card-footer text-center">
                <button class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>
@endsection