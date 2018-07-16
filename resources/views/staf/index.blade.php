@extends('layouts.master')
@section('content')

<div class="content-wrapper">
    <div class="container-fluid">
        @include('layouts.flash')
        <form action="{{ route('menu4.edit') }}" method="POST">
        @csrf      
            <div class="form-group">
            <label for="exampleFormControlTextarea1">Ganti deskripsi</label>
            <textarea class="form-control" name="deskripsi" rows="3">{{ $setting->menu4 ? $setting->menu4['deskripsi'] : 'deskripsi' }}</textarea>
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
            <br>
            <br>
        </form>
            <a href="{{ route('staf.create') }}" class="btn btn-warning">Tambah Staf</a>
            <table class="table-bordered">
                <tr>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Motto</th>
                    <th colspan="2">Action</th>
                </tr>
                @foreach($staf as $data)
                <tr>
                    <td><img src="{{ asset('storage/img/staff/' . $data->foto) }}" alt="" width="64" height="64"></td>
                    <td>{{ $data->nama }}</td>
                    <td>{{ $data->jabatan }}</td>
                    <td>{{ $data->motto }}</td>
                    <td><a href="{{ action('StafController@edit', $data->id) }}" class="btn btn-default">Edit</a></td>
                    <td>
                        <form action="{{ action('StafController@destroy', $data->id) }}" method="POST">
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
</div>

@endsection