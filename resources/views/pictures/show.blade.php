@extends('layouts.base')

@section('title', 'cd-comics-Picture')
    

@section('main')
<main>
    <h1 class="text-center">{{$picture->title}}</h1>
    <img src="{{$picture->thumb}}" alt="">
    <p>{{$picture->description}}</p>
</main>
    
@endsection