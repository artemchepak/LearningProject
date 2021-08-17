<?php

namespace App\Http\Controllers;

use App\Models\MovieCategory;
use Illuminate\Http\Request;

class MovieCategoryController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $categories = MovieCategory::all();
        return view('categories.categories', compact('categories'));
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('categories.create-category');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $category = new MovieCategory();
        $category->name = $request->input('name');
        $category->save();

        return redirect()->route('categories.index');
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $category = MovieCategory::find($id);
        return view('categories.edit-category', compact('category'));
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $category = MovieCategory::find($id);
        $category->name = $request->input('name');
        $category->save();

        return redirect()->route('categories.index');
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        MovieCategory::find($id)->delete();
        return redirect()->route('categories.index');
    }

    public function getAllMoviesByCategory($id){
        $category = MovieCategory::find($id);
        $movies = $category->movies;
        return view('movies.all-movies-by-category', compact('movies'));
    }
}
