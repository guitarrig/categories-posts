
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">

                  <div class="panel">
                    <div class="panel-heading">
                      <div class="text-center">
                        <div class="row">
                            <div class="col-sm-9">
                                <h3 class="pull-left">{{$post->name}}</h3>
                            </div>
                            <div class="col-sm-3">
                                <h4 class="pull-right">
                                <small><em>{{$post->created_at}}</em></small>
                                </h4>
                            </div>
                        </div>
                      </div>
                    </div>

            <div class="panel-body">
              <h6>Category: {{$post->category->name}}</h6>
                {{$post->description}}
            </div>
            <h4 class="pull-left"><br>
            <small><em>Updated: {{$post->updated_at}}</em></small>
            </h4>
            <a href="{{route('posts.edit', $post->id)}}" class="btn btn-outline-success">Edit Post!</a>
            <form method="post" action="{{route('posts.destroy', $post->id)}}">
              @method('DELETE')
              @csrf
              <div >
                <input type="submit" value="Delete Post!" class="btn btn-outline-danger">
              </div>
            </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
