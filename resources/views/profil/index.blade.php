@extends('layouts.master')
@section('content')

<div class="content-wrapper">
    <div class="container-fluid">
        @include('layouts.flash')
        <form action="{{ route('menu2.edit') }}" method="POST">
            @csrf  
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Ganti deskripsi</label>
                  <textarea class="form-control" name="deskripsi" rows="3">{{ $setting->menu2 ? $setting->menu2['deskripsi'] : 'deskripsi' }}</textarea>
                </div>
                <button type="submit" class="btn btn-success">Simpan</button>
                <br>
                <br>
                
        </form>
        <a href="{{ route('profil.create') }}" class="btn btn-warning">Tambah Text</a>

        <table class="table-bordered">
            <tr>
                <th>Id</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th colspan="2">Action</th>
            </tr>
            @foreach($profil as $data)
            <tr>
                <td>{{ $data->id }}</td>
                <td>{{ $data->judul }}</td>
                <td>{{ $data->deskripsi }}</td>
                <td><a href="{{ action('ProfilController@edit', $data->id) }}" class="btn btn-default">Edit</a></td>
                <td>
                    <form action="{{ action('ProfilController@destroy', $data->id) }}" method="POST">
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