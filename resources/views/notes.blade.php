@extends('layouts.app')

@section('content')

    <h1>All notes</h1>

    <a href="{{route('notes.create')}}">Add Note</a>

    @foreach($notes as $note)
        <div>
            <h3>{{$note->note_subject}}</h3>
            <i>Author: v{{$note->note_author}}</i><br>
            <p>{{$note->note_text}}</p>

            <a href="{{route('notes.show',$note->id)}}">Read more</a>
        </div>
    @endforeach

@endsection
