@extends('layouts.master')
@section('content')

<div class="content-wrapper">
    <div class="container-fluid">
        @include('layouts.flash')
        <form action="{{ action('ProfilController@update', $id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <h3>Edit informasi profil</h3>
            <br>
            <div class="form-group">
                    <label for="exampleFormControlTextarea1" class="control-label mb-1">Judul</label>
                    <input type="text" name="judul" placeholder="judul" value="{{ $profil->judul }}" class="form-control" aria-required="true" aria-invalid="false" required>
            </div>
            <div class="form-group">
                    <label for="exampleFormControlTextarea1" class="control-label mb-1">deskripsi</label>
                    <input type="text" name="deskripsi" placeholder="deskripsi" value="{{ $profil->deskripsi }}" class="form-control" aria-required="true" aria-invalid="false" required>
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
        </form>
    </div>
</div>


@endsection