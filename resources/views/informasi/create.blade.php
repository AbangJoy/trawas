@extends('layouts.master')
@section('content')

<div class="content-wrapper">
    <div class="container-fluid">
        @include('layouts.flash')
        <form action="{{ url('informasi') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <h3>Tambah data pada informasi</h3>
                <br>
            <div class="form-group">
                <label for="exampleFormControlInput1">Angka/Jumlah</label>
                <input type="text" class="form-control" name="angka" placeholder="" aria-required="true" aria-invalid="false" required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Deskripsi</label>
                <textarea class="form-control" name="teks" rows="3" aria-required="true" aria-invalid="false" required></textarea>    
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
        </form>
    </div>
</div>

@endsection