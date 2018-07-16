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
            </form>
            <a href="{{ route('beranda.create') }}" class="btn btn-warning">Tambah Gambar background</a>
              <table class="table-bordered">
                <tr>
                    <th>Foto</th>
                    <th colspan="2">Action</th>
                </tr>
                @foreach($beranda as $data)
                <tr>
                    <td><img src="{{ asset('storage/img/beranda/' . $data->foto) }}" alt="" width="64" height="64"></td>
                    <td><a href="{{ action('BerandaController@edit', $data->id) }}" class="btn btn-default">Edit</a></td>
                    <td>
                        <form action="{{ action('BerandaController@destroy', $data->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">
                            Hapus
                        </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
    </div>
</div>

@endsection