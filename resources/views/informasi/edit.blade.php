@extends('layouts.master')
@section('content')

<div class="content-wrapper">
    <div class="container-fluid">
        @include('layouts.flash')
        <form action="{{ action('InformasiController@update', $id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <h3>Edit informasi kecamatan</h3>
            <br>
            <div class="form-group">
                    <label for="exampleFormControlTextarea1" class="control-label mb-1">Angka</label>
                    <input type="text" name="angka" placeholder="angka" value="{{ $informasi->angka }}" class="form-control" aria-required="true" aria-invalid="false" required>
            </div>
            <div class="form-group">
                    <label for="exampleFormControlTextarea1" class="control-label mb-1">Text</label>
                    <input type="text" name="teks" placeholder="teks" value="{{ $informasi->teks }}" class="form-control" aria-required="true" aria-invalid="false" required>
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
        </form>
    </div>
</div>


@endsection