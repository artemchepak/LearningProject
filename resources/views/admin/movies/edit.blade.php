@extends('layouts.admin_layout')

@section('title', 'Main page')

@section('content')

    <h1>Edit {{$movie->title}}</h1>
    <img src="{{asset("storage/$movie->image")}}" alt="" style="max-height: 200px; margin-bottom: 20px">
    <form action="{{route('movies.update', $movie->id)}}" method="post">
        @csrf
        @method('PATCH')
        <div class="mb-2">
            <input class="form-label" type="text" name="name" id="name" placeholder="Movie title" value="{{$movie->title}}">
        </div>
        <div class="mb-2">
            <input class="form-label" type="text" name="country" id="country" placeholder="Country" value="{{$movie->country}}">
        </div>
        <div class="mb-2">
            <input class="form-label" type="text" name="year" id="year" placeholder="Release year" value="{{$movie->release_year}}">
        </div>
        <div class="mb-2">
            <input class="form-label" type="text" name="genre" id="genre" placeholder="Genre" value="{{$movie->genre}}">
        </div>
        <div class="mb-2">
            <textarea name="description" id="description" placeholder="Description">{{$movie->description}}</textarea>
        </div>
        <div class="mb-2">
            <input type="file" name="image" id="image">
        </div>
        <div class="mb-2">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </form>

@endsection
