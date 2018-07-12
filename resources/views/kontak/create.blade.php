@extends('layouts.master')
@section('content')

<div class="content-wrapper">
    <div class="container-fluid">
        @include('layouts.flash')
        <form action="{{ url('kontak') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                    <label for="exampleFormControlInput1">Judul</label>
                    <input type="text" class="form-control" name="judul" placeholder="">
                </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Text1</label>
                <input type="text" class="form-control" name="text1" placeholder="">
            </div>
            <div class="form-group">
                    <label for="exampleFormControlInput1">Text2</label>
                    <input type="text" class="form-control" name="text2" placeholder="">
                </div>
                <div class="form-group">
                        <label for="exampleFormControlInput1">Text3</label>
                        <input type="text" class="form-control" name="text3" placeholder="">
                    </div>
            <button type="submit" class="btn btn-success">Simpan</button>
        </form>
    </div>
</div>

@endsection