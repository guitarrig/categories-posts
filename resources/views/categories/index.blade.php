@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  <div class="form-inline">
                    <form action="{{route('categories.create')}}" method="post">
                      @method('GET')
                      <input type="submit" class="btn btn-outline-primary" value="New Category!">
                    </form>
                    <form action="{{route('posts.index')}}" method="post">
                      @method('GET')
                      <input type="submit" class="btn btn-outline-dark" value="All Posts!">
                    </form></div>
                </div>

                <div class="card-body">
                    <ul class="list-group">
                      @foreach($categories as $category)
                        <a href="{{route('categories.show', $category->id)}}">
                        <li class="list-group-item d-flex  justify-content-between align-items-center">
                          {{$category->name}}<br>

                          <span class="badge badge-pill badge-info">{{$category->created_at}}</span>
                            <span class="badge badge-primary badge-pill nav justify-content-end">
                              {{$category->posts->count()}} posts
                            </span>
                        </li></a>

                      @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
