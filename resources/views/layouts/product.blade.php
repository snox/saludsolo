@extends('layouts.main')

@section('content')


    <div class="container">

        
        <div class="row justify-content-center">
            <div class="col-md-8">
                @yield('products')

            </div>
            <div class="col-md-4">

            </div>
        </div>
    </div>
@endsection

@section('banner')
    <div style="align-content: center; background: url('repository/product_center.jpg'); height: 585px;">

    </div>
@endsection