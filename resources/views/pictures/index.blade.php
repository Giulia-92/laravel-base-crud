@extends('layouts.base')

@section('title', 'cd-comics-Pictures')
    

@section('main')
<main>
    <h1 class="text-center">Pictures</h1>
    <div class="container">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Image</th>
            <th scope="col">Type</th>
            <th scope="col">Price</th>
            <th scope="col">View</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($pictures as $picture)
            <tr>
                <td>{{$picture->id}}</td>
                <td>{{$picture->title}}</td>
                <td>{{$picture->image}}</td>
                <td>{{$picture->type}}</td>
                <td>{{$picture->price}}$</td>
                <td> <a href="{{route('pictures.show',$picture->id)}}" class="btn btn-success">View</a></td>
                <td> <a href="{{route('pictures.edit',$picture->id)}}" class="btn btn-info">Create</a></td>
                <td>
                  <form action="{{route('pictures.destroy',$picture->id)}}" method="POST">
                    @csrf
                    @method('delete')
                   <button class="btn btn-danger">Delete</button>
                  </form>
                  </td>
              </tr> 
            @endforeach
        </tbody>
      </table>
    </div>
</main>
    
@endsection