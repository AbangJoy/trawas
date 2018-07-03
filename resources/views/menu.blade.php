@extends('layouts.master')
@section('content')

<div class="content-wrapper">
    <div class="container-fluid">
        @include('layouts.flash')
        <form action="{{ route('edit.menu') }}" method="POST">
        {{ csrf_field() }}
<input type="text" name="menu1" placeholder="menu1" value = "{{ $setting->menu ? $setting->menu['menu1'] : '' }}" required>
<br>
<br>
<input type="text" name="menu2" placeholder="menu2" value = "{{ $setting->menu ? $setting->menu['menu2'] : '' }}" required>
<br>
<br>
<input type="text" name="menu3" placeholder="menu3" value = "{{ $setting->menu ? $setting->menu['menu3'] : '' }}" required>
<br>
<br>
<input type="text" name="menu4" placeholder="menu4" value = "{{ $setting->menu ? $setting->menu['menu4'] : '' }}" required>
<br>
<br>
<input type="text" name="menu5" placeholder="menu5" value = "{{ $setting->menu ? $setting->menu['menu5'] : '' }}" required>
<br>
<br>
<input type="text" name="menu6" placeholder="menu6" value = "{{ $setting->menu ? $setting->menu['menu6'] : '' }}" required>
<br>
<br>
<input type="text" name="menu7" placeholder="menu7" value = "{{ $setting->menu ? $setting->menu['menu7'] : '' }}" required>
<br>
<br>
<input type="text" name="menu8" placeholder="menu8" value = "{{ $setting->menu ? $setting->menu['menu8'] : '' }}" required>
<br>
<br>
<input type="text" name="menu9" placeholder="menu9" value = "{{ $setting->menu ? $setting->menu['menu9'] : '' }}" required>
<br>
<br>
<input type="text" name="menu10" placeholder="menu10" value = "{{ $setting->menu ? $setting->menu['menu10'] : '' }}" required>
<br>
<br>
<button type="submit" name="submit">Simpan</button>
        </form>
    </div>
</div>

@endsection