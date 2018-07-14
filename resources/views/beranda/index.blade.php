@extends('layouts.master')
@section('content')

<div class="content-wrapper">
    <div class="container-fluid">
        @include('layouts.flash')
        <form action="{{ route('menu1.edit') }}" method="POST">
            @csrf  
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Ganti text1</label>
                  <textarea class="form-control" name="text1" rows="3">{{ $setting->menu1 ? $setting->menu1['text1'] : 'text1' }}</textarea>
                </div>
                <div class="form-group">
                        <label for="exampleFormControlTextarea1">Ganti text2</label>
                        <textarea class="form-control" name="text2" rows="3">{{ $setting->menu1 ? $setting->menu1['text2'] : 'text2' }}</textarea>
                </div>
                <button type="submit" class="btn btn-success">Simpan</button>
                <br>
                <br>
                <a href="{{ route('beranda.create') }}" class="btn btn-warning">Ganti background</a>
              </form>
    </div>
</div>

@endsection