@extends('layouts.master')
@section('content')

<div class="content-wrapper">
    <div class="container-fluid">
        @include('layouts.flash')
        <form action="{{ action('BerandaController@update', $id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <input type="file" name="foto" placeholder="foto">
            <button type="submit" class="btn btn-success">Simpan</button>
        </form>
    </div>
</div>

@endsection