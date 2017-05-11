@extends('default_template.default')
@section('title-page')
  Editar Posts
@endsection
@section('title-model')
  Post
@endsection
@section('subtitle-model')
Edit
@endsection
@section('content-model')
	<form action="{{action('PostsController@update',$post->id)}}" method="POST">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
		
		<label for="title">Title</label>
		<input class="form-control" type="text" name="title" id="title" value="{{$post->title}}">
		<label for="content">Content</label>
		<textarea class="form-control" name="content" id="content" cols="30" rows="10">{{ $post->content }}</textarea>
		<hr>
		<input class="btn btn-success btn-lg" type="submit">
		<a href="{{action('PostsController@index')}}" class="btn btn-default btn-lg">Back</a>
	</form>
@endsection