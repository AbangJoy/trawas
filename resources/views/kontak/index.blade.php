@extends('layouts.master')
@section('content')

<div class="content-wrapper">
    <div class="container-fluid">
        @include('layouts.flash')
        <form action="{{ route('menu10.edit') }}" method="POST">
            @csrf  
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Ganti deskripsi</label>
                  <textarea class="form-control" name="deskripsi" rows="3">{{ $setting->menu10 ? $setting->menu10['deskripsi'] : 'deskripsi' }}</textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Judul</label>
                    <input type="text" class="form-control" name="judul" placeholder="">
                </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Lokasi</label>
                <input type="text" class="form-control" name="lokasi" placeholder="">
            </div>
            <div class="form-group">
                    <label for="exampleFormControlInput1">Telp</label>
                    <input type="text" class="form-control" name="telp" placeholder="">
                </div>
                <div class="form-group">
                        <label for="exampleFormControlInput1">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="">
                    </div>
                <button type="submit" class="btn btn-success">Simpan</button>
                <br>
                <br>
            
              </form>
    </div>
</div>

@endsection