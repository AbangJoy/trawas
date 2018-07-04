@extends('layouts.master')
@section('content')

<div class="content-wrapper">
    <div class="container-fluid">
        @include('layouts.flash')
        <form action="{{ url('profil') }}" method="POST">
        @csrf
            <h1>Profil</h1>
        </form>
    </div>
</div>

@endsection