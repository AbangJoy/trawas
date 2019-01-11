@extends('layouts.master')
@section('content')

<div class="content-wrapper">
    <div class="container-fluid">
        @include('layouts.flash')
        <form action="{{ url('profil') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <h3>Tambah Text Pada Profil</h3>
                <br>
                <label for="exampleFormControlInput1">Nama Informasi</label>
                <input type="text" class="form-control" name="judul" placeholder="" required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Ganti deskripsi</label>
                <textarea class="form-control" name="deskripsi" rows="3" required></textarea>    
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
        </form>
    </div>
</div>

@endsection