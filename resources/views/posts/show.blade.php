@extends('default_template.default')
@section('title-page')
  Show Post
@endsection
@section('title-model')
  Post
@endsection
@section('subtitle-model')
  Show
@endsection
@section('content-model')
  <h1>{{ $post->title }}</h1>
  <p>{{ $post->content }}</p>
  <hr>
  <a href="{{action('PostsController@index')}}" class="btn btn-default btn-lg">
    Back
  </a>
  <hr>
  <h1>Coments ({{$post->coments->count()}})</h1>
  <form action="{{action('ComentsController@store')}}" method="post">
  	{{ csrf_field() }}
  	<input type="hidden" name="post_id" value="{{$post->id}}">
  	<label for="coment"></label>
  	<textarea name="coment" id="coment" class="form-control" rows="10" placeholder="Faça seu comentário"></textarea>
  	<br>
  	<input type="submit" name="" class="btn btn-success">
  	
  </form>
  <ul>
  	@foreach ($post->coments as $coment)
  	<li>
  		<p>{{ $coment->coment}}</p>
  	</li>
  	@endforeach
  </ul>
@endsection

