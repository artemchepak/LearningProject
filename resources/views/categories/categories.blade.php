@extends('layouts.app')

@section('title')
    All Categories
@endsection

@section('content')

    <h1>Movie categories list</h1>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">Category Name</th>
            <th scope="col" class="text-end">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <td>{{$category->name}}</td>
                <td class="text-end">
                    <a href="{{route('movie.by.category', $category->id)}}" class="btn btn-primary">Movie list</a>
                </td>

            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
