@extends('layouts.master')
@section('content')

<div class="content-wrapper">
    <div class="container-fluid">
        @include('layouts.flash')
        <form action="{{ url('galeri') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">Deskripsi foto</label>
                <input type="text" class="form-control" name="deskripsi" placeholder="">
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