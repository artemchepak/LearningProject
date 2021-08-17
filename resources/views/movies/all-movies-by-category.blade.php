@extends('layouts.app')

@section('title')
    All movies
@endsection

@section('content')

@foreach($movies as $movie)
    <h3>{{$movie->title}}</h3><br>
@endforeach

@endsection
