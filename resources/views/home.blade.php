@extends('layouts.app')

@section('title')
    Home page
@endsection

@section('content')

    <h1>{{__('Home page')}}</h1>

    <div class="container">
        <div class="d-flex p-2 justify-content-between flex-wrap">
            @foreach($movies as $movie)
                <div class="d-inline-flex m-2">
                    <div class="card" style="width: 20rem;">
                        <img class="card-img-top" src="{{asset("storage/$movie->image")}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{$movie->title}}</h5>
                            <p class="card-text">{{$movie->genre}}, {{$movie->release_year}}, {{$movie->country}}</p>
                            <a href="{{route('showMovie',$movie->id)}}" class="btn btn-primary">{{__('Read more')}}</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
