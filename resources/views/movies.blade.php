@extends('templates.template')

@section('page_title', 'Movies')

@section('content')
@foreach($movies as $movie)
<div class="card">
    <div class="round">
        {{$movie->vote}}
    </div>
    <h2>Titolo: {{$movie->title}}</h2>
    <h4>Titolo originale: {{$movie->original_title}}</h4>
    <p>{{$movie->date}}</p>
     <p>{{$movie->nationality}}</p>
</div>
@endforeach
@endsection
