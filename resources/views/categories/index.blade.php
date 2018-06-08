@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  <center><h3>Categories</h3></center>
                  <div class="form-inline">

                    <form action="{{route('categories.create')}}" method="post">
                      @method('GET')
                      <input type="submit" class="btn btn-outline-success" value="New Category!">
                    </form>

                      <form action="{{route('posts.index')}}" method="post">
                        @method('GET')
                        <div style="margin: 10px 0 10px 470px; display:block;">
                          <input type="submit" class="btn btn-outline-success" value="All Posts!">
                        </div>
                      </form>

                  </div>
                </div>

                <div class="card-body">

                    <ul class="list-group">

                      @foreach($categories as $category)
                        <a href="{{route('categories.show', $category->id)}}">
                          <li class="list-group-item d-flex   align-items-center">
                            {{$category->name}}<br>

                          <center style="margin: auto;">
                            <span class="badge badge-pill badge-info" >
                              Creation date<br>{{$category->created_at}}
                            </span>
                          </center>
                          <span class="badge badge-primary badge-pill nav justify-content-end">
                              {{$category->posts->count()}} posts
                          </span>
                        </li>

                      </a>

                      @endforeach



                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
