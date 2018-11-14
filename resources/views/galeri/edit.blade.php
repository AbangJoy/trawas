@extends('layouts.master')
@section('content')

<div class="content-wrapper">
    <div class="container-fluid">
        @include('layouts.flash')
        <form action="{{ action('GaleriController@update', $id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-group">
                    <label for="exampleFormControlTextarea1">Foto</label>
            <input type="file" name="foto" placeholder="foto">
            </div>
            <div class="form-group">
                    <label for="exampleFormControlTextarea1">Deskripsi</label>
                    <input type="text" name="deskripsi" placeholder="deskripsi" value="{{ $galeri->deskripsi }}" required>
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
        </form>
    </div>
</div>

@endsection