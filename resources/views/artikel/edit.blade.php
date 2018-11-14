@extends('layouts.master')
@section('content')

<div class="content-wrapper">
    <div class="container-fluid">
        @include('layouts.flash')
        <form action="{{ action('ArtikelController@update', $id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-group">
                    <label for="exampleFormControlTextarea1">Foto</label>
            <input type="file" name="foto" placeholder="foto">
            </div>
            <div class="form-group">
                    <label for="exampleFormControlTextarea1">Judul</label>
                    <input type="text" name="judul" placeholder="judul" value="{{ $artikel->judul }}" required>
            </div>
            <div class="form-group">
                    <label for="exampleFormControlTextarea1">Deskripsi</label>
                    <input type="text" name="deskripsi" placeholder="deskripsi" value="{{ $artikel->deskripsi }}" required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Isi</label>
                <input type="text" name="isi" placeholder="isi" value="{{ $artikel->isi }}" required>
        </div>
            <button type="submit" class="btn btn-success">Simpan</button>
        </form>
    </div>
</div>

@endsection