@extends('layouts.master')
@section('content')

<div class="content-wrapper">
    <div class="container-fluid">
        @include('layouts.flash')
        <form action="{{ route('menu5.edit') }}" method="POST">
        @csrf  
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Ganti deskripsi</label>
              <textarea class="form-control" name="deskripsi" rows="3">{{ $setting->menu5 ? $setting->menu5['deskripsi'] : 'deskripsi' }}</textarea>
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
            <br>
            <br>
            <a href="{{ route('desa.create') }}" class="btn btn-warning">Tambah Desa</a>
          </form>
    </div>
</div>

@endsection