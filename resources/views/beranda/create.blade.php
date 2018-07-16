@extends('layouts.master')
@section('content')

<div class="content-wrapper">
    <div class="container-fluid">
        @include('layouts.flash')
        <form action="{{ url('beranda') }}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                    <label for="exampleFormControlInput1">Ganti background</label>
                    <br>
                    <input type="file" name="foto" placeholder="foto" required>
                </div>
                
                <button type="submit" class="btn btn-success">Simpan</button>
        </form>
    </div>
</div>

@endsection