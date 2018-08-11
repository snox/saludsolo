@extends('layouts.main')

@section('title', '| View ' . $product->name)

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>{{ $product->name }}</h1>

            <p class="lead">{!! $product->content !!}</p>

            <hr>

           <a href="{{ route('product.edit', $product->id) }}">Edit</a>
        </div>
    </div>
</div>

@endsection