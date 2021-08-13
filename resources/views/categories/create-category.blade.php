@extends('layouts.app')

@section('title')
    Create category
@endsection

@section('content')

    <h1>Add new movie category</h1>

    <form action="{{route('categories.store')}}" method="post">
        @csrf
        <input type="text" name="name" id="name" placeholder="Category name">
        <input type="submit" value="Save category">
    </form>

@endsection
