@extends('layouts.product')

@section('products')


        <div class="card-header">Products</div>

        <div class="row">

        @foreach ($products as $product)
            <div class="col-3">
            <section>
            <div class="card">
                <div class="card-header">{{$product->name}}</div>
                <img class="card-img-top" src="{{$product->image}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$product->name}}</h5>
                </div>
            </div>
            </section>
            </div>
        @endforeach

    </div>
        <div class="text-center">
            {!! $products->links(); !!}
        </div>
@endsection