@extends('layouts.app')

@section('title')
    Home page
@endsection

@section('content')

    <h1>Home page</h1>

    @foreach($movies as $movie)
        <div class="card" style="width: 25rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$movie->title}}</h5>
                <p class="card-text">{{$movie->genre}}, {{$movie->release_year}}, {{$movie->country}}</p>
                <a href="{{route('movies.show',$movie->id)}}" class="btn btn-primary">Read more</a>
            </div>
        </div>
    @endforeach

@endsection
