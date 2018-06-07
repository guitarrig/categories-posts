
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  <p><div align="center"> <strong> All posts <strong></div></p>
                  <a href="{{route('posts.create')}}" class="btn btn-outline-primary">New Post!</a>
                </div>

                <div class="card-body">
                  <ul>
                  @foreach($posts as $post)
                  <li class="list-group">
                    <div class="card">
                      <div class="card-header">
                        <cite>Category: {{$post->category->name}}</cite>
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">{{$post->name}}</h5>
                        <p class="card-text">{{$post->description}}</p>
                        <a href="{{route('posts.show', $post->id)}}" class="btn btn-outline-info">Post Info!</a>
                        <a href="{{route('posts.edit', $post->id)}}" class="btn btn-outline-success">Edit Post!</a>
                        <form method="post" action="{{route('posts.destroy', $post->id)}}">
                          @method('DELETE')
                          @csrf
                          <input type="submit" value="Delete Post!" class="btn btn-outline-danger">
                        </form>

                      </div>
                    </div>
                  </li>
                  @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
