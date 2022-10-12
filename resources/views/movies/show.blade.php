@extends('layouts.app')

@section ('content')

<div class="container"> 
  <div class="info__sx">
    <h2>Title : {{$movie->title}}</h2>
    <h3>Original title : {{$movie->original_title}}</h3>
  </div>
  <div class="info__dx">
    <p>Nationality : {{$movie->nationality}}</p>
    <p>Vote : {{$movie->vote}}</p>
    <p>Date : {{$movie->date}}</p>
  </div>         
</div>    

@endsection