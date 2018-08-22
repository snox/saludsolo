@extends('layouts.main')

@section('title', '| Edit Product')

@section('stylesheets')

    {!! Html::style('css/select2.min.css') !!}

    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'link code autoresize table',
            menubar: false,
            toolbar: 'formatselect | bold italic strikethrough forecolor backcolor | table link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
        });
    </script>

@endsection

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-12">
    	{!! Form::model($product, ['route' => ['product.update', $product->id], 'method' => 'PUT']) !!}
			{{ Form::label('name', 'Title:') }}
			{{ Form::text('name', null, ["class" => 'form-control input-lg']) }}

			{{ Form::label('content', "Body:", ['class' => 'form-spacing-top']) }}
			{{ Form::textarea('content', null, ['class' => 'form-control']) }}

            {{ Form::submit('Update', ['class' => 'btn btn-block btn-success', 'style' => 'margin-top: 15px;']) }}
            {!! Form::close() !!}
        </div>
    </div>

@endsection