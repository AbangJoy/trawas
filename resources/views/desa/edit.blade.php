@extends('layouts.master')
@section('content')

<div class="content-wrapper">
    <div class="container-fluid">
        @include('layouts.flash')
        <form action="{{ action('DesaController@update', $id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-group">
                    <label for="exampleFormControlTextarea1">Foto</label>
            <input type="file" name="foto" placeholder="foto">
            </div>
            <div class="form-group">
                    <label for="exampleFormControlTextarea1">Nama</label>
                    <input type="text" name="nama" placeholder="nama" value="{{ $desa->nama }}" required>
            </div>
            <div class="form-group">
                    <label for="exampleFormControlTextarea1">Url</label>
                    <input type="text" name="url" placeholder="url" value="{{ $desa->url }}" required>
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
        </form>
    </div>
</div>

@endsection