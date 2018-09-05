@extends('layouts.main')

@section('content')

    <div class="row justify-content-center">
        <div class="col-8">
            @yield('products')

        </div>
        <div class="col-4">

        </div>
    </div>
@endsection

@section('banner')
    <div class="title_banner" style="background: url('repository/product_center.jpg'); ">

    </div>
@endsection