@extends('layouts.app');

@section('metaTitle','My-Movies');

@section('content')
  <div class="container">
    @foreach ($movies as $movie)
      <div class="info__sx">
        <h2>{{$movie->title}}</h2>
        <h3>{{$movie->original_title}}</h3>
      </div>
      <div class="info__dx">
        <p>{{$movie->nationality}}</p>
        <p>{{$movie->vote}}</p>
        <p>{{$movie->date}}</p>
      </div>     
    @endforeach
  </div>
@endsection