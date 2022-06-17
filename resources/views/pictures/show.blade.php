@extends('layouts.base')

@section('title', 'cd-comics-Picture')
    

@section('main')

<div class="card m-5" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="{{$picture->image}}" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">{{$picture->title}}</h5>
          <p class="card-text">{{$picture->description}}</p>
          <p class="card-text">{{$picture->type}}</p>
          <p class="card-text">{{$picture->series}}</p>
          <p class="card-text">{{$picture->price}}$</p>
         <button class="btn btn-danger">Delete</button> 
        </div>
      </div>
    </div>
  </div>

@endsection