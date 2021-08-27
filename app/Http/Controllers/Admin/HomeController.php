<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use App\Models\MovieCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $moviesCount = Movie::all()->count();
        $categoriesCount = MovieCategory::all()->count();

        return view('admin.home.index', [
            'moviesCount' => $moviesCount,
            'categoriesCount' => $categoriesCount
        ]);
    }
}
