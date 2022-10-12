@extends('layouts.app')

@section('metaTitle','My-Movies')

@section('content')
  @foreach ($movies as $movie)
  <a href="{{route('movies.show',$movie)}}">
    <div class="container"> 
      <div class="title">
        <h2>Title : {{$movie->title}}</h2>
        <h3>Original title : {{$movie->original_title}}</h3>
      </div>
    </div>    
  </a>
  @endforeach
    
@endsection