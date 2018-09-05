@extends('layouts.product')

@section('title', '| View ' . $product->name)

@section('products')

    <div class="card-header">{{ $product->name }}</div>


<p class="lead">{!! $product->content !!}</p>

<hr>

<a href="{{ route('products.edit', $product->id) }}">Edit</a>

@endsection