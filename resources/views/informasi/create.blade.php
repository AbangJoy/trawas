@extends('layouts.master')
@section('content')

<div class="content-wrapper">
    <div class="container-fluid">
        @include('layouts.flash')
        <form action="{{ url('informasi') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">Jumlah informasi</label>
                <input type="text" class="form-control" name="angka" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Ganti nama</label>
                <textarea class="form-control" name="teks" rows="3"></textarea>    
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
        </form>
    </div>
</div>

@endsection