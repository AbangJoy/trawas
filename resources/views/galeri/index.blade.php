@extends('layouts.master')
@section('content')

<div class="content-wrapper">
    <div class="container-fluid">
        @include('layouts.flash')
        <form action="{{ route('menu8.edit') }}" method="POST">
            @csrf  
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Ganti deskripsi</label>
                  <textarea class="form-control" name="deskripsi" rows="3">{{ $setting->menu8 ? $setting->menu8['deskripsi'] : 'deskripsi' }}</textarea>
                </div>
                <button type="submit" class="btn btn-success">Simpan</button>
                <br>
                <br>
            
              </form>
    </div>
</div>

@endsection