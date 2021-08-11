@extends('layouts.app')

@section('content')

<div>
    <h3>{{$note->note_subject}}</h3>
    <i>Author: {{$note->note_author}}</i><br>
    <p>{{$note->note_text}}</p>

    <a href="{{route('notes.edit', $note->id)}}">Update Note</a><br>
    <form action="{{route('notes.destroy', $note->id)}}" method="post">
        @csrf
        @method("DELETE")
        <input type="submit" value="Delete Note">
    </form>
</div>

@endsection
