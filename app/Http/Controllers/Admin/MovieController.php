<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreMovie;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class MovieController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $movies = Movie::all();
        return view('admin.movies.index', compact('movies'));
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('admin.movies.create');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreMovie $request)
    {
        $validatedData = $request->validated();

        $image = $request->file('image');
        $imagePath = $image->store('movie');

        $movie = new Movie();
        $movie->title = $request->input('name');
        $movie->country = $request->input('country');
        $movie->release_year = $request->input('year');
        $movie->genre = $request->input('genre');
        $movie->description = $request->input('description');
        $movie->image = $imagePath;
        $movie->save();

        Log::debug('Movie added', ['key1' => 1, 'key2' => 2, 'user' => Auth::user()->name]);

        return redirect()->route('home');
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $movie = Movie::find($id);
        return view('admin.movies.one-movie', compact('movie'));
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $movie = Movie::find($id);
        return view('admin.movies.edit', compact('movie'));
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function update(Request $request, $id)
    {
        $image = $request->file('image');
        $imagePath = $image->store('movie');

        $movie = Movie::find($id);
        $movie->title = $request->input('name');
        $movie->country = $request->input('country');
        $movie->release_year = $request->input('year');
        $movie->genre = $request->input('genre');
        $movie->description = $request->input('description');
        $movie->image = $imagePath;
        $movie->save();

        return view('movies.one-movie', compact('movie'));
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        Movie::find($id)->delete();

        Log::alert('Movie deleted', ['movieId' => $id]);

        return redirect()->route('home');
    }
}
