@extends('layouts.master')
@section('content')

<div class="content-wrapper">
    <div class="container-fluid">
        @include('layouts.flash')
        <form action="{{ url('desa') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <h3>Tambah Desa</h3>
                <br>
            <div class="form-group">
                <label for="exampleFormControlInput1">Nama Desa</label>
                <input type="text" class="form-control" name="nama" placeholder="" required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Pilih foto</label>
                <br>
                <input type="file" name="foto" placeholder="foto" required>
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
        </form>
    </div>
</div>

@endsection