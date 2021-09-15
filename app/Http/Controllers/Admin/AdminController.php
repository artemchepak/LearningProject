<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use App\Models\MovieCategory;
use App\Models\Test;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $moviesCount = Movie::all()->count();
        $categoriesCount = MovieCategory::all()->count();
        $userInfo = Test::simplePaginate(10);

        return view('admin.home.index', [
            'moviesCount' => $moviesCount,
            'categoriesCount' => $categoriesCount,
            'userInfo' => $userInfo
        ]);
    }
}
