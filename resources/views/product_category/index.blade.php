@extends('layouts.product')

@section('content')
    <div class="row justify-content-center">
        <h2>产品分类管理</h2>

        <table class="table table-hover">
            <thead class="thead-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">名称 [{{ App::getLocale() }}]</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($productCategories as $category)
            <tr>
                <th scope="row">{{ $category->id }}</th>
                <td>
                    <form class="form-inline" action="/{{ App::getLocale() }}/product/category/locale" method="post">
                        @csrf
                        <input type="hidden" name="locale" value="{{ App::getLocale() }}">
                        <input type="hidden" name="category_id" value="{{ $category->id }}">
                        <input type="text" name="name" class="form-control flex-grow-1" value="{!! $category->name !!}">
                        <button type="submit" class="btn btn-primary ml-2">Submit</button>
                    </form>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection