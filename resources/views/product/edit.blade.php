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
        <div class="col-md-12" style="height: 200px;">
        </div>
        <h2 style="vertical-align: bottom;">Edit: {{$product->name}}</h2>
        <div class="col-md-12">
    	{!! Form::model($product, ['route' => ['products.update', $product->id], 'method' => 'PUT']) !!}
			{{ Form::label('name', 'Title:') }}
			{{ Form::text('name', null, ["class" => 'form-control input-lg']) }}

			{{ Form::label('content', "Body:", ['class' => 'form-spacing-top']) }}
			{{ Form::textarea('content', null, ['class' => 'form-control']) }}

            <label>
            	{!! Form::checkbox('show_on_home', '1', null,  ['id' => 'show_on_home']) !!}
            	Show on homepage.
            </label>

            {{ Form::submit('Update', ['class' => 'btn btn-block btn-success', 'style' => 'margin-top: 15px;']) }}
            {!! Form::close() !!}
        </div>
    </div>

@endsection