
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  <center><h3>All Posts</h3></center>
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
