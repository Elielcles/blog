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
@endsection

