@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                  @if(count($errors) > 0)
                  <div class="alert alert-danger">
                    <ul>
                      @foreach($errors->all() as $error)
                      <li>{{$error}}</li>
                      @endforeach

                    </ul>
                  </div>
                  @endif
                  <form action="{{route('posts.update', $post->id)}}" method="post">
                    @method('PUT')
                    @csrf
                    <div class="form-group mx-sm-3 mb-2">
                      <label>Name: </label>
                      <input type="text" class="form-control" name="name"  value="{{(old('name') != NULL)? old('name') : $post->name}}"><br>
                      <label>Description: </label>
                      <input type="text" class="form-control" name="description"  value="{{(old('description') != NULL)? old('description') : $post->description}}"><br>
                      <label>Category id: </label>
                      <input type="number" class="form-control" name="category_id"  value="{{(old('category_id') != NULL)? old('category_id') : $post->category_id}}">
                    </div>
                    <button type="submit" class="btn btn-outline-primary mb-2">Update!</button>
                  </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
