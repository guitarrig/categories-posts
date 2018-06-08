@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  <center><h3>{{$category->name}}</h3></center>
                    <div class="form-row">
                  <form action="{{route('categories.edit', $category->id)}}" method="post">
                    @method('GET')
                    <input type="submit" class="btn btn-outline-success" value="Edit Category!">
                  </form>
                  <form action="{{route('categories.destroy', $category->id)}}" method="post">
                    @method('DELETE')
                    @csrf
                    <input type="submit" class="btn btn-outline-danger" value="Delete Category!">
                  </form>
                  <form action="{{route('posts.create', $category->id)}}" method="post">
                    @method('GET')
                    <input type="hidden" value="{{$category->id}}" name="categoryId">
                    <input type="submit" value="New Post!" class="btn btn-outline-primary">
                  </form>
                </div>
                </div>

                <div class="card-body">
                  @if($category->posts->count())
                    <ul>
                      @foreach($category->posts as $post)

                        <li class="list-group-item d-flex justify-content-between align-items-center">
                          <a href="{{route('posts.show', $post->id)}}">{{$post->name}}</a>
                        </li>
                        @endforeach
                    </ul>
                    @else
                    The category is empty =(
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
