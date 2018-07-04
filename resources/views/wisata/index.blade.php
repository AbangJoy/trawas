@extends('layouts.master')
@section('content')

<div class="content-wrapper">
    <div class="container-fluid">
        @include('layouts.flash')
        <form action="{{ route('create.staf') }}" method="POST">
        {{ csrf_field() }}
            <h1>wisata</h1>
        </form>
    </div>
</div>

@endsection