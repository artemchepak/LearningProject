@extends('layouts.admin_layout')

@section('title', 'Main page')

@section('content')

    <h1>Add new movie</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('movies.store')}}" method="post">
        @csrf
        <div class="mb-2">
            <input class="form-label" type="text" name="name" id="name" placeholder="Movie title">
        </div>
        <div class="mb-2">
            <input class="form-label" type="text" name="country" id="country" placeholder="Country">
        </div>
        <div class="mb-2">
            <input class="form-label" type="text" name="year" id="year" placeholder="Release year">
        </div>
        <div class="mb-2">
            <input class="form-label" type="text" name="genre" id="genre" placeholder="Genre">
        </div>
        <div class="mb-2">
            <textarea name="description" id="description" placeholder="Description"></textarea>
        </div>
        <div class="mb-2">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </form>

@endsection
