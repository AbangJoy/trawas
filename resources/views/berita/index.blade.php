@extends('layouts.master')
@section('content')

<div class="content-wrapper">
    <div class="container-fluid">
        @include('layouts.flash')
        <form action="{{ url('berita') }}" method="POST">
        @csrf
            <h1>Berita</h1>
        </form>
    </div>
</div>

@endsection