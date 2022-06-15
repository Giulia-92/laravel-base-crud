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
                <td>{{$picture->thumb}}</td>
                <td>{{$picture->type}}</td>
                <td>{{$picture->price}}</td>
                <td> <a href="{{route('pictures.show',$picture->id)}}" class="btn btn-succes">View Now</a></td>
                <td> <a href="{{route('pictures.show',$picture->id)}}" class="btn btn-info"></a></td>
                <td> <a href="{{route('pictures.show',$picture->id)}}" class="btn btn-alert"></a></td>
              </tr> 
            @endforeach
        </tbody>
      </table>
</main>
    
@endsection