@extends('layouts.app')


@section('content')
<div class="card text-white bg-primary mb-3" style="max-width: 100%;">
    <div class="card-header">{{ $post->fname}} - {{ $post->lname }}
        <a href="/post/{{$post->id}}/edit" class="btn btn-warning">Edit</a>
    {{ Form::open(array('action'=>['postController@destroy',$post->id], 'method'=>'POST')) }}
    {{Form::submit('Delete')}}
    {{method_field('DELETE')}}
    {{ Form::close() }}
    </div>
    <div class="card-body ">
      <h4 class="card-title">{{ $post->subject}}</h4>
      <p class="card-text">{{ $post->body}}</p>
      <span class="badge bg-danger">created at : {{ $post->created_at }} </span>
      <a href="/post" class="btn btn-warning">Back</a>
    </div>
</div>
@endsection
