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
		
		<label for="title">Title</label>
		<input class="form-control" type="text" name="title" id="title">
		<label for="content">Content</label>
		<textarea class="form-control" name="content" id="content" cols="30" rows="10"></textarea>
		<hr>
		<input class="btn btn-success btn-lg" type="submit">
		<a href="{{action('PostsController@index')}}" class="btn btn-default btn-lg">Back</a>
	</form>
@endsection