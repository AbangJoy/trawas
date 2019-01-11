

@extends('layouts.master')
@section('content')

<div class="content-wrapper">
    <div class="container-fluid">
        @include('layouts.flash')
        <form action="{{ url('staf') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <h3>Tambah data pada Staf</h3>
            
                <div class="form-group">
                    <label for="exampleFormControlInput1">Pilih foto</label>
                    <br>
                    <input type="file" name="foto" placeholder="foto" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="nama" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Jabatan</label>
                    <textarea class="form-control" name="jabatan" rows="3"></textarea>    
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Motto</label>
                    <textarea class="form-control" name="motto" rows="8"></textarea>    
                </div>
                <button type="submit" class="btn btn-success">Simpan</button>
        </form>
    </div>
</div>

@endsection