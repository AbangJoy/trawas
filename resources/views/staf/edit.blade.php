@extends('layouts.master')
@section('content')

<div class="content-wrapper">
    <div class="container-fluid">
        @include('layouts.flash')
        <form action="{{ action('StafController@update', $id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <h3>Edit Staf kecamatan</h3>
            <br>
            <div class="form-group">
                    <label for="exampleFormControlTextarea1" class="control-label mb-1">Foto</label>
                    <input type="file" name="foto" placeholder="foto" value="{{ $staf->foto }}" class="form-control" aria-required="true" aria-invalid="false" required>
            </div>
            <div class="form-group">
                    <label for="exampleFormControlTextarea1" class="control-label mb-1">Nama</label>
                    <input type="text" name="nama" placeholder="nama" value="{{ $staf->nama }}" class="form-control" aria-required="true" aria-invalid="false" required>
            </div>
            <div class="form-group">
                    <label for="exampleFormControlTextarea1" class="control-label mb-1">Jabatan</label>
                    <input type="text" name="jabatan" placeholder="jabatan" value="{{ $staf->jabatan }}" class="form-control" aria-required="true" aria-invalid="false" required>
            </div>
            <div class="form-group">
                    <label for="exampleFormControlTextarea1" class="control-label mb-1">Motto</label>
                    <input type="text" name="motto" placeholder="motto" value="{{ $staf->motto }}" class="form-control" aria-required="true" aria-invalid="false" required>
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>

          
        </form>

        
    </div>
</div>

@endsection