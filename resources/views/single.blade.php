@extends('template')

@section('title')
    {{ $product["name"] }}
@endsection

@section('body')
<div class="singleproduct {{ $product["status"] }}">
    <h1>{{ $product["name"] }}</h1>
    <p>Status: {{ $product["status"] }}</p>
    <p>Price: {{ $product["price"] }}</p>
</div>
@endsection