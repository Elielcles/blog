@extends('default_template.default')
@section('title-page')
  Criar Posts
@endsection
@section('title-model')
  Post
@endsection
@section('subtitle-model')
Create
@endsection
@section('content-model')
	<form action="{{action('PostsController@store')}}" method="POST">
		{{ csrf_field() }}

		<div class="form-group @if ($errors->has('title')) has-error @endif">
			<label for="title">Title</label>
			<input class="form-control" type="text" name="title" id="title" value="{{old('title')}}">
			@if ($errors->has('title'))
			<span id="helpBlock2" class="help-block">{{$errors->get('title')[0]}}</span>
			@endif
		</div>

		<div class="form-group @if ($errors->has('content')) has-error @endif has-error">
			<label for="content">Content</label>
			<textarea class="form-control" name="content" id="content" cols="30" rows="10">{{old('content')}}
			</textarea>
			@if ($errors->has('content'))
			<span id="helpBlock2" class="help-block">{{$errors->get('content')[0]}}</span>
			@endif
		</div>
		<hr>
		<input class="btn btn-success btn-lg" type="submit">
		<a href="{{action('PostsController@index')}}" class="btn btn-default btn-lg">Back</a>
	</form>
@endsection