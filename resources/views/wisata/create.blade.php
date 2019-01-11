@extends('layouts.master')
@section('content')

<div class="content-wrapper">
    <div class="container-fluid">
        @include('layouts.flash')
        <form action="{{ url('wisata') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                    <label for="exampleFormControlInput1">Nama Wisata</label>
                    <input type="text" name="nama" class="form-control" placeholder="nama">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Pilih foto</label>
                    <br>
                    <input type="file" name="foto" placeholder="foto">
                </div>
                <div class="form-group">
                        <label for="exampleFormControlTextarea1">Ganti deskripsi</label>
                        <input type="text" name="deskripsi" class="form-control" placeholder="deskripsi">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Ganti isi</label>
                    <textarea class="form-control" name="isi" rows="8"></textarea>    
                </div>
                <button type="submit" class="btn btn-success">Simpan</button>
        </form>
    </div>
</div>

@endsection