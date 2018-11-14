@extends('layouts.master')
@section('content')

<div class="content-wrapper">
    <div class="container-fluid">
        @include('layouts.flash')
        <form action="{{ action('WisataController@update', $id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-group">
                    <label for="exampleFormControlTextarea1">Foto</label>
            <input type="file" name="foto" placeholder="foto">
            </div>
            <div class="form-group">
                    <label for="exampleFormControlTextarea1">Nama</label>
                    <input type="text" name="nama" placeholder="nama" value="{{ $wisata->nama }}" required>
            </div>
            <div class="form-group">
                    <label for="exampleFormControlTextarea1">Deskripsi</label>
                    <input type="textarea" name="deskripsi" placeholder="deskripsi" value="{{ $wisata->deskripsi }}" required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Isi</label>
                <input type="textarea" name="isi" placeholder="isi" value="{{ $wisata->isi }}" required>
        </div>
            <button type="submit" class="btn btn-success">Simpan</button>
        </form>
    </div>
</div>

@endsection