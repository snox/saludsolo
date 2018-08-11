@extends('layouts.main')

@section('title', '| Edit Product')

@section('stylesheets')

    {!! Html::style('css/select2.min.css') !!}

    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'link code',
            menubar: false
        });
    </script>

@endsection

@section('content')

    <div class="row">
    	{!! Form::model($product, ['route' => ['product.update', $product->id], 'method' => 'PUT']) !!}
        <div class="col-md-8">
			{{ Form::label('name', 'Title:') }}
			{{ Form::text('name', null, ["class" => 'form-control input-lg']) }}

			{{ Form::label('content', "Body:", ['class' => 'form-spacing-top']) }}
			{{ Form::textarea('content', null, ['class' => 'form-control']) }}
        </div>
        {!! Form::close() !!}
    </div>

@endsection