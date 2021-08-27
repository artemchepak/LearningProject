@extends('layouts.app')

@section('title')
    Home page
@endsection

@section('content')

    <h1>Home page</h1>



    <div class="container">
        <div class="d-flex p-2 justify-content-between flex-wrap">
            @foreach($movies as $movie)
                <div class="d-inline-flex m-2">
                    <div class="card" style="width: 20rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{$movie->title}}</h5>
                            <p class="card-text">{{$movie->genre}}, {{$movie->release_year}}, {{$movie->country}}</p>
                            <a href="{{route('movies.show',$movie->id)}}" class="btn btn-primary">Read more</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
