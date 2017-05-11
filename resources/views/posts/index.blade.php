@extends('default_template.default')
@section('title-page')
  Lista de Posts
@endsection
@section('title-model')
  Post
@endsection
@section('subtitle-model')
  Index 
  <a href="{{action('PostsController@create')}}" class="btn btn-success btn-lg">
    <i class="glyphicon glyphicon-plus-sign"></i> New
  </a>
@endsection
@section('content-model')
  <div class="table-resposive">
    <table class="table table-hover table-bordered table-striped">
      <tr>
        <th>id</th>
        <th>Title</th>
        <th>Contet</th>
        <th>Action</th>
      </tr>
      @foreach($posts as $post)
        <tr>
          <td>{{ $post->id }}</td>
          <td>{{ $post->title }}</td>
          <td>{{ $post->content }}</td>
          <td>
            <form action="{{action('PostsController@destroy',$post->id)}}" method="POST" style="float: left; margin-right: 3px">
              {{ csrf_field() }}
              {{ method_field('DELETE') }}
              <button class="btn btn-danger"> 
                <i class="glyphicon glyphicon-trash"></i>  Delete
              </button>
            </form>

            <a href="{{action('PostsController@show',$post->id)}}" class="btn btn-default">
              <i class="glyphicon glyphicon-eye-open"></i> Show
            </a>
            <a href="{{action('PostsController@edit',$post->id)}}" class="btn btn-default"> 
              <i class="glyphicon glyphicon-edit"></i>
              Edit
            </a>
          </td>
        </tr>
      @endforeach
    </table>
  </div>
          <!-- fim conteúdo da pagina  -->
@endsection
@section('paginate')
  {{ $posts->render() }}
@endsection
