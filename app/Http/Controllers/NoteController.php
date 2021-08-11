<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

/**
 *
 */
class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return string
     */
    public function index()
    {
        $notes = Note::all();
        return view('notes', compact('notes'));
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('create-note');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $note = new Note();
        $note->note_subject = $request->input('subject');
        $note->note_text = $request->input('text');

        $note->save();

        return redirect()->route('home');
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $note = Note::where('id', $id)->get()->first();
        return view('one-note', compact('note'));
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $note = Note::where('id', $id)->get()->first();
        return view('update-note', compact('note'));
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function update(Request $request, $id)
    {
        $note = Note::find($id);
        $note->note_subject = $request->input('subject');
        $note->note_text = $request->input('text');

        $note->save();

        return view('one-note', compact('note'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Note::find($id)->delete();
        return redirect()->route('home');
    }
}
