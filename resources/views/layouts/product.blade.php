@extends('layouts.main')

@section('content')

    <div class="row justify-content-center">
        <div class="col-3">
            <div class="card">

                <div class="card-header">Product Categories</div>

                <div>
                    {!! $ProductCategory->asUl( ['class' => 'sidebar-nav'], ['class' => 'second-level-ul'] ) !!}
                </div>
            </div>

        </div>

        <div class="col-9">
            @yield('products')

        </div>
    </div>
@endsection

@section('banner')
    <div class="title_banner" style="background: url('/repository/product_center.jpg'); ">

    </div>
@endsection