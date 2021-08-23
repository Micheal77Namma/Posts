@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    <div class="row">
    @foreach ($posts as $p)
    <div class="col-sm-4">
        <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
            <div class="card-header">{{ $p->fname}} - {{ $p->lname }}</div>
            <div class="card-body">
              <h4 class="card-title">{{ $p->subject}}</h4>
              <p class="card-text">{{ $p->body}}</p>
              <span class="badge bg-danger">created at : {{ $p->created_at }} </span>
              <a href="/post/{{ $p->id }}" class="btn btn-warning">More</a>
            </div>
          </div>
    </div>
    @endforeach
    </div>
    <div class="d-grid gap-2">
        <a class="btn btn-lg btn-primary" href="/post/create">Create new post</a>
      </div>
@endsection


