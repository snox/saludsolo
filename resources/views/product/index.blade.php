@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card-header">Products</div>

                @foreach ($products as $product)

                    <div>
                        <a href="{{ route('product.show', $product->id) }}">{{$product->name}}</a>
                    </div>

                @endforeach

                <div class="text-center">
                    {!! $products->links(); !!}
                </div>
            </div>
        </div>
    </div>
@endsection