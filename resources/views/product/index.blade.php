@extends('layouts.product')

@section('products')
    <div class="card-header">Products</div>

    @foreach ($products as $product)

        <div>
            <a href="{{ route('product.show', $product->id) }}">{{$product->name}}</a>
        </div>

    @endforeach

    <div class="text-center">
        {!! $products->links(); !!}
    </div>
@endsection