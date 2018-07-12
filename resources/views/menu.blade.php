@extends('layouts.master')
@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
        @include('layouts.flash')
        <div class="box" style="border: 1px solid;border-radius:3%; width:700px; height:590px; margin-left:250px;">
        <form action="{{ route('menu.edit') }}" method="POST" style="margin-left:250px; margin-top:10px;">
        {{ csrf_field() }}
<input type="text" name="menu1" placeholder="menu1" value = "{{ $setting->menu ? $setting->menu['menu1'] : 'menu1' }}" required>
<br>
<br>
<input type="text" name="menu2" placeholder="menu2" value = "{{ $setting->menu ? $setting->menu['menu2'] : 'menu2' }}" required>
<br>
<br>
<input type="text" name="menu3" placeholder="menu3" value = "{{ $setting->menu ? $setting->menu['menu3'] : 'menu3' }}" required>
<br>
<br>
<input type="text" name="menu4" placeholder="menu4" value = "{{ $setting->menu ? $setting->menu['menu4'] : 'menu4' }}" required>
<br>
<br>
<input type="text" name="menu5" placeholder="menu5" value = "{{ $setting->menu ? $setting->menu['menu5'] : 'menu5' }}" required>
<br>
<br>
<input type="text" name="menu6" placeholder="menu6" value = "{{ $setting->menu ? $setting->menu['menu6'] : 'menu6' }}" required>
<br>
<br>
<input type="text" name="menu7" placeholder="menu7" value = "{{ $setting->menu ? $setting->menu['menu7'] : 'menu7' }}" required>
<br>
<br>
<input type="text" name="menu8" placeholder="menu8" value = "{{ $setting->menu ? $setting->menu['menu8'] : 'menu8' }}" required>
<br>
<br>
<input type="text" name="menu9" placeholder="menu9" value = "{{ $setting->menu ? $setting->menu['menu9'] : 'menu9' }}" required>
<br>
<br>
<input type="text" name="menu10" placeholder="menu10" value = "{{ $setting->menu ? $setting->menu['menu10'] : 'menu10' }}" required>
<br>
<br>
<button class="btn btn-success" type="submit" name="submit">Simpan</button>
</div>
        </form>
    </div>
@include('layouts.script')
</div>

@endsection