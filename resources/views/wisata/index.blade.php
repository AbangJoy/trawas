@extends('layouts.master')
@section('content')

<div class="content-wrapper">
    <div class="container-fluid">
        @include('layouts.flash')
        <form action="{{ url('wisata') }}" method="POST">
        @csrf
            <h1>wisata</h1>
        </form>
    </div>
</div>

@endsection