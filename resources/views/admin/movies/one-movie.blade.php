@extends('layouts.admin_layout')

@section('title', 'Main page')

@section('content')

    <h1>{{$movie->title}}</h1>

    <p>{{$movie->release_year}}</p>
    <p>{{$movie->country}}</p>
    <p>{{$movie->genre}}</p>
    <p>{{$movie->description}}</p>

    <a class="btn btn-warning" href="{{route('movies.edit', $movie->id)}}">Edit</a>
    <form action="{{route('movies.destroy', $movie->id)}}" method="post" style="display: inline">
        @csrf
        @method('DELETE')
        <input class="btn btn-danger" type="submit" value="Delete">
    </form>

@endsection
