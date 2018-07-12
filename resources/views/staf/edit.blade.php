@extends('layouts.master')
@section('content')

<div class="content-wrapper">
    <div class="container-fluid">
        @include('layouts.flash')
        <form action="{{ action('StafController@update', $id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <input type="file" name="foto" placeholder="foto">
            <input type="text" name="nama" placeholder="nama" value="{{ $staf->nama }}" required>
            <input type="text" name="jabatan" placeholder="jabatan" value="{{ $staf->jabatan }}" required> 
            <input type="text" name="motto" placeholder="motto" value="{{ $staf->motto }}" required>
            <button type="submit" class="btn btn-success">Simpan</button>
        </form>
    </div>
</div>

@endsection