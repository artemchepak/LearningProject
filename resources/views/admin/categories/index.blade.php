@extends('layouts.admin_layout')

@section('title', 'Main page')

@section('content')

    <h1>Movie categories list</h1>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">Category Name</th>
            <th scope="col" class="text-right">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <td>{{$category->name}}</td>
                <td class="text-right">
                    <a href="{{route('categories.edit', $category->id)}}" class="btn btn-warning">Edit</a>
                    <form action="{{route('categories.destroy', $category->id)}}" method="post" style="display: inline">
                        @csrf
                        @method('DELETE')
                        <input class="btn btn-danger" type="submit" value="Delete">
                    </form>
                    <a href="{{route('movie.by.category', $category->id)}}" class="btn btn-primary">Movie list</a>
                </td>

            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
