@extends('layouts.app')

@section('title')
{{$movie->title}}
@endsection

@section('content')

    <h1>{{$movie->title}}</h1>

    <p>{{$movie->release_year}}</p>
    <p>{{$movie->country}}</p>
    <p>{{$movie->genre}}</p>
    <p>{{$movie->description}}</p>

@endsection
