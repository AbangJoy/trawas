@extends('layouts.master')
@section('content')

<div class="content-wrapper">
    <div class="container-fluid">
        @include('layouts.flash')
        <form action="{{ url('kontak') }}" method="POST">
        @csrf
            <h1>Kontak</h1>
        </form>
    </div>
</div>

@endsection