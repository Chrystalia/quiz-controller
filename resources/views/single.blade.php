@extends('template')

@section('title')
    {{ $product["name"] }}
@endsection

@section('description')
    {{ $product["description"] }}
@endsection

@section('body')
<div class="singleproduct {{ $product["status"] }}">
    <h1>{{ $product["name"] }}</h1>
    <p>Status: {{ $product["status"] }}</p>
    <p>Price: {{ $product["price"] }}</p>
    <p>{{ $product["description"] }}</p>
</div>
@endsection