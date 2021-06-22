@extends('templates.template')

@section('page_title', 'Movies')

@section('content')
<div class="container">
    <div class="flex-container">


        @foreach($movies as $movie)
        <div class="card">
            <div class="round">
                {{$movie->vote}}
            </div>
            <h2>Titolo</h2>
            <h2>{{$movie->title}}</h2>
            <h4>Titolo originale</h4>
            <h4>{{$movie->original_title}}</h4>
            <p>{{$movie->date}}</p>
            <p>{{$movie->nationality}}</p>
        </div>
        @endforeach
    </div>
</div>
@endsection
