@extends('layouts.master')
@section('content')

<div class="content-wrapper">
    <div class="container-fluid">
        @include('layouts.flash')
        <form action="{{ url('desa') }}" method="POST">
        @csrf
            <h1>Desa</h1>
        </form>
    </div>
</div>

@endsection