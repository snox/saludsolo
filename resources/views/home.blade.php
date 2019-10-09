@extends('layouts.main')

@section('content')
    <div style="height: 100px;"></div>
    <div class="row">
        <h1>BOUTIQUE</h1>
    </div>
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

    <style type="text/css">
        .row h1 {
            background: white;
            font-size: 30px;
            padding: 8px;
            color: rgba(0, 92, 185, 1);

        }
    </style>

@endsection

@section('banner')
    <div class="title_banner" style="background: url('repository/index_1.jpg');"></div>
@endsection