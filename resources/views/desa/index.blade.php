@extends('layouts.master')
@section('content')

<div class="content-wrapper">
    <div class="container-fluid">
        @include('layouts.flash')
        <form action="{{ route('menu5.edit') }}" method="POST">
        @csrf  
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Ganti deskripsi</label>
              <textarea class="form-control" name="deskripsi" rows="3">{{ $setting->menu5 ? $setting->menu5['deskripsi'] : 'deskripsi' }}</textarea>
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
            <br>
            <br>
            <a href="{{ route('desa.create') }}" class="btn btn-warning">Tambah Desa</a>
          </form>
          <table class="table-bordered">
                <tr>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>URL</th>
                    <th colspan="2">Action</th>
                </tr>
                @foreach($desa as $data)
                <tr>
                    <td><img src="{{ asset('storage/img/desa/' . $data->foto) }}" alt="" width="64" height="64"></td>
                    <td>{{ $data->nama }}</td>
                    <td>{{ $data->url }}</td>
                    <td><a href="{{ action('DesaController@edit', $data->id) }}" class="btn btn-default">Edit</a></td>
                    <td>
                        <form action="{{ action('DesaController@destroy', $data->id) }}" method="POST">
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