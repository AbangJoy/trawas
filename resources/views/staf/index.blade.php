@extends('layouts.master')
@section('content')

<div class="content-wrapper">
    <div class="container-fluid">
        @include('layouts.flash')
        <form action="{{ url('staf') }}" method="POST">
        @csrf
            <h1>Staf</h1>
        </form>
    </div>
</div>

@endsection