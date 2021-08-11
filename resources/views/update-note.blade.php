@extends('layouts.app')

@section('content')

    <h1>Update note</h1>

    <form action="{{route('notes.update', $note->id)}}" method="post">
        @csrf
        @method("PATCH")
        <input type="text" name="subject" id="subject" placeholder="note_subject" value="{{$note->note_subject}}"><br>
        <textarea name="text" id="text" placeholder="note_text">{{$note->note_text}}</textarea><br>
        <input type="submit" value="Update Note">
    </form>

@endsection
