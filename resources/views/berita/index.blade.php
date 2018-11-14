@extends('layouts.master')
@section('content')

<div class="content-wrapper">
    <div class="container-fluid">
        @include('layouts.flash')
        <form action="{{ route('menu9.edit') }}" method="POST">
            @csrf  
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Ganti deskripsi</label>
                  <textarea class="form-control" name="deskripsi" rows="3">{{ $setting->menu9 ? $setting->menu9['deskripsi'] : 'deskripsi' }}</textarea>
                </div>
                <button type="submit" class="btn btn-success">Simpan</button>
                <br>
                <br>
                <a href="{{ route('berita.create') }}" class="btn btn-warning">Buat Berita</a>
              </form>

              <table class="table-bordered">
                    <tr>
                        <th>Foto</th>
                        <th>Judul</th>
                        <th>Isi</th>
                        <th>Deskripsi</th>
                        <th colspan="2">Action</th>
                    </tr>
                    @foreach($berita as $data)
                    <tr>
                        <td><img src="{{ asset('storage/img/berita/' . $data->foto) }}" alt="" width="64" height="64"></td>
                        <td>{{ $data->judul }}</td>
                        <td>{{ $data->isi }}</td>
                        <td>{{ $data->deskripsi}}</td>
                        <td><a href="{{ action('BeritaController@edit', $data->id) }}" class="btn btn-default">Edit</a></td>
                        <td>
                            <form action="{{ action('BeritaController@destroy', $data->id) }}" method="POST">
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