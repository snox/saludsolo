@extends('layouts.product')

@section('products')


        <h1>Products {{isset($cate) ? $cate->name : ""}}</h1>

        <div class="row">

        @foreach ($products as $product)
            <div class="pbox">
                <a href="{{ route('products.show', $product->id) }}">
                    <img src="{{$product->image}}" alt="{{$product->name}}">
                    <div>
                        <h2 class="title">{{$product->name}}</h2>
                    </div>
                </a>
            </div>
        @endforeach

        </div>
        <div class="text-center">
            {!! $products->links(); !!}
        </div>
@endsection