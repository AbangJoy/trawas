@extends('layouts.master')
@section('content')

<div class="content-wrapper">
    <div class="container-fluid">
        @include('layouts.flash')
        <form action="{{ url('produk') }}" method="POST">
        @csrf
            <h1>Produk</h1>
        </form>
    </div>
</div>

@endsection