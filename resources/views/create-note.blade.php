@extends('layouts.app')

@section('content')

    <h1>Create new note</h1>

    <form action="{{route('notes.store')}}" method="post">
        @csrf
        <input type="text" name="subject" id="subject" placeholder="note_subject"><br>
        <textarea name="text" id="text" placeholder="note_text"></textarea><br>
        <input type="submit" value="Save Note">
    </form>

@endsection
