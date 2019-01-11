@extends('layouts.master')
@section('content')

<div class="content-wrapper">
    <div class="container-fluid">
        @include('layouts.flash')
        <form action="{{ route('menu3.edit') }}" method="POST">
            @csrf  
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Ganti deskripsi</label>
                  <textarea class="form-control" name="deskripsi" rows="3">{{ $setting->menu3 ? $setting->menu3['deskripsi'] : 'deskripsi' }}</textarea>
                </div>
                <button type="submit" class="btn btn-success">Simpan</button>
                <br>
                <br>
                <a href="{{ route('informasi.create') }}" class="btn btn-warning">Tambah</a>
              </form>
              <table class="table-bordered">
                    <tr>
                        <th>Id</th>
                        <th>Angka</th>
                        <th>Teks</th>
                        <th colspan="2">Action</th>
                    </tr>
                    @foreach($informasi as $data)
                    <tr>
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->angka }}</td>
                        <td>{{ $data->teks }}</td>
                        <td><a href="{{ action('InformasiController@edit', $data->id) }}" class="btn btn-default">Edit</a></td>
                        <td>
                            <form action="{{ action('InformasiController@destroy', $data->id) }}" method="POST">
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