@extends('layouts.base')

@section('title', 'cd-comics-Novità')
    

@section('main')
<h1 class="text-center"> Modifica fumetto</h1>
    <form action="{{route('pictures.update',$picture->id)}}" method="POST">
      @csrf
      @method('PUT')
      <div class="container">
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control" id="title" aria-describedby="title" name="title" value="{{$picture->title}}">
        </div>
        <div class="mb-3">
          <label for="Description" class="form-label">Description</label>
          <textarea class="form-control" id="description" aria-describedby="description" cols="30" name="description">{{$picture->description}}</textarea>
        </div>
        <div class="mb-3">
          <label for="type" class="form-label">Select Type :</label>
          <select class="form-control" name="type" id="type">
            <option value="comic book" {{$picture->type == 'comic book' ? 'selected' : ''}}>comic book</option>
            <option value="graphic novel" {{$picture->type == 'graphic novel' ? 'selected' : ''}}>graphic novel</option>
           
          </select>
        </div>
        <div class="mb-3">
          <label for="image" class="form-label">Image-url</label>
          <input type="text" class="form-control" id="image" aria-describedby="image" name="image" value="{{$picture->image}}">
        </div>
        <div class="mb-3">
          <label for="price" class="form-label">Prezzo</label>
          <input type="number" class="form-control" id="price" aria-describedby="price" name="price" value="{{$picture->price}}" >
        </div>
        <div class="mb-3">
          <label for="series" class="form-label">Series</label>
          <input type="text" class="form-control" id="series" aria-describedby="series" name="series" value="{{$picture->series}}">
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
      </div>
      </form>
@endsection