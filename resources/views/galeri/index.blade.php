@extends('layouts.master')
@section('content')

<div class="content-wrapper">
    <div class="container-fluid">
        @include('layouts.flash')
        <form action="{{ url('galeri') }}" method="POST">
        @csrf
            <h1>Galeri</h1>
        </form>
    </div>
</div>

@endsection