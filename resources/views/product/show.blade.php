@extends('layouts.product')

@section('title', '- ' . $product->name)

@section('products')

    <h1>{{ $product->name }}</h1>

    <div style="padding: 30px;">
<p class="lead">{!! $product->content !!}</p>
    </div>
<hr>

<a href="{{ route('products.edit', $product->id) }}">Edit</a>

@endsection