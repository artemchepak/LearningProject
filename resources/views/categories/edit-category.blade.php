@extends('layouts.app')

@section('title')
    {{$category->name}}
@endsection

@section('content')

    <h1>Update category {{$category->name}}</h1>

    <form action="{{route('categories.update', $category->id)}}" method="post">
        @csrf
        @method('PATCH')
        <input type="text" name="name" id="name" placeholder="Category name" value="{{$category->name}}">
        <input type="submit" value="Save category">
    </form>

@endsection
