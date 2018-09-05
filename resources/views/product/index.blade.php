@extends('layouts.product')

@section('products')


        <div class="card-header">Products</div>

        <div class="row">

        @foreach ($products as $product)
            <div class="col-3">
            <section>
            <div class="card">
                <a href="{{ route('products.show', $product->id) }}">
                    <img class="card-img-top" src="{{$product->image}}" alt="{{$product->name}}">
                    <div class="card-body">
                        <h5 class="card-title">{{$product->name}}</h5>
                    </div>
                </a>
            </div>
            </section>
            </div>
        @endforeach

    </div>
        <div class="text-center">
            {!! $products->links(); !!}
        </div>
@endsection