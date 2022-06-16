@extends('layouts.base')

@section('title', 'cd-comics-Novità')
    

@section('main')
<h1 class="text-center">Novità
  <img src="{{asset('img/dc-logo.png')}}" alt="logo" width="50" height="50">
</h1>
<form action="{{route('pictures.store')}}" method="POST">
  @csrf
  <div class="container"> 
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control" id="title" aria-describedby="title" name="title" placeholder="Inserisci titolo">
    </div>
    <div class="mb-3">
      <label for="Description" class="form-label">Description</label>
      <textarea class="form-control" id="description" aria-describedby="description" cols="30" name="description" placeholder="Inserisci descrizione"></textarea>
    </div>
    <div class="mb-3">
      <label for="type" class="form-label">Select Type :</label>
      <select class="form-control" name="type" id="type">
        <option value="comic book">comic book</option>
        <option value="graphic novel">graphic novel</option>
      </select>
    </div>
    <div class="mb-3">
      <label for="image" class="form-label">Image-url</label>
      <input type="text" class="form-control" id="image" aria-describedby="image" name="image" placeholder="Inserisci url immagine">
    </div>
    <div class="mb-3">
      <label for="price" class="form-label">Price</label>
      <input type="number" class="form-control" id="price" aria-describedby="price" name="price" placeholder="Inserisci prezzo">
    </div>
    <div class="mb-3">
      <label for="series" class="form-label">Series</label>
      <input type="text" class="form-control" id="series" aria-describedby="series" name="series" placeholder="series" >
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
  </div>
  </form>
@endsection