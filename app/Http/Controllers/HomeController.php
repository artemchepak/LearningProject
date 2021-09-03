<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\MovieCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $movies = Movie::all();
        return view('home', compact('movies'));
    }

    public function showMovie($id){
        $movie = Movie::find($id);
        return view('movies.one-movie', compact('movie'));
    }

    public function categories(){
        $categories = MovieCategory::all();
        return view('categories.categories', compact('categories'));
    }

    public function getAllMoviesByCategory($id){
        $category = MovieCategory::find($id);
        $movies = $category->movies;
        return view('movies.all-movies-by-category', compact('movies'));
    }
}
