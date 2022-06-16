@extends('layouts.base')

@section('title', 'cd-comics-Pictures')
    

@section('main')
<main>
    <h1 class="text-center">Pictures</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Thumb</th>
            <th scope="col">Type</th>
            <th scope="col">Price</th>
            <th scope="col">View Now</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($pictures as $picture)
            <tr>
                <td>{{$picture->id}}</td>
                <td>{{$picture->title}}</td>
                <td>{{$picture->image}}</td>
                <td>{{$picture->type}}</td>
                <td>{{$picture->price}}</td>
                <td> <a href="{{route('pictures.show',$picture->id)}}" class="btn btn-success">View Now</a></td>
                <td> <a href="{{route('pictures.show',$picture->id)}}" class="btn btn-info">Create</a></td>
                <td> <a href="{{route('pictures.show',$picture->id)}}" class="btn btn-warning">Delete</a></td>
              </tr> 
            @endforeach
        </tbody>
      </table>
</main>
    
@endsection