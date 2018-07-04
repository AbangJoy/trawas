@extends('layouts.master')
@section('content')

<div class="content-wrapper">
    <div class="container-fluid">
        @include('layouts.flash')
        <form action="{{ url('informasi') }}" method="POST">
        @csrf
            <h1>Informasi</h1>
        </form>
    </div>
</div>

@endsection