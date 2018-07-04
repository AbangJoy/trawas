@extends('layouts.master')
@section('content')

<div class="content-wrapper">
    <div class="container-fluid">
        @include('layouts.flash')
        <form action="{{ url('beanda') }}" method="POST">
        @csrf
            <h1>Beranda</h1>
        </form>
    </div>
</div>

@endsection