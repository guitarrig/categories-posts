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
                  <form class="form-inline" action="{{route('categories.update', $category->id)}}" method="post">
                    @method('PUT')
                    @csrf
                    <div class="form-group mx-sm-3 mb-2">

                      <input type="text" class="form-control" name="name" id="name" placeholder="Put the name..." value="{{(old('name') != NULL) ? old('name') : $category->name }}">
                    </div>
                    <button type="submit" class="btn btn-outline-primary mb-2">Update!</button>
                  </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
