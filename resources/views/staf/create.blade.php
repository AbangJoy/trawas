@extends('layouts.master')
@section('content')

<div class="content-wrapper">
    <div class="container-fluid">
        @include('layouts.flash')
        <form action="{{ url('staf') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="foto" placeholder="foto" required>
            <input type="text" name="nama" placeholder="nama" required>
            <input type="text" name="jabatan" placeholder="jabatan" required> 
            <input type="text" name="motto" placeholder="motto" required>
            <button type="submit" class="btn btn-success">Simpan</button>
        </form>
    </div>
</div>

@endsection