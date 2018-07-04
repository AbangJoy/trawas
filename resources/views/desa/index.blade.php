@extends('layouts.master')
@section('content')

<div class="content-wrapper">
    <div class="container-fluid">
        @include('layouts.flash')
        <form action="{{ route('create.desa') }}" method="POST">
        {{ csrf_field() }}
            <h1></h1>
        </form>
    </div>
</div>

@endsection