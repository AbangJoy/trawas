@extends('layouts.master')
@section('content')

<div class="content-wrapper">
    <div class="container-fluid">
        @include('layouts.flash')
        <form action="{{ url('berita') }}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                    <label for="exampleFormControlInput1">Pilih foto</label>
                    <br>
                    <input type="file" name="foto" placeholder="foto" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Judul berita</label>
                    <input type="text" name="judul" class="form-control" placeholder="judul berita" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Ganti deskripsi</label>
                    <textarea class="form-control" name="deskripsi" rows="3"></textarea>    
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Ganti isi berita</label>
                    <textarea class="form-control" name="isi" rows="8"></textarea>    
                </div>
                <button type="submit" class="btn btn-success">Simpan</button>
        </form>
    </div>
</div>

@endsection