<?php

use App\Http\Controllers\MovieCategoryController;
use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [MovieController::class, 'index'])->name('home');
Route::redirect('/home', '/');
Route::resource('movies', MovieController::class);
Route::resource('categories', MovieCategoryController::class);
Route::get('/movies/category/{id}', [MovieCategoryController::class, 'getAllMoviesByCategory'])->name('movie.by.category');


Auth::routes();

Route::get('test', function (){
    return 123;
});

Route::middleware(['role:admin'])->prefix('admin_panel')->group(function () {
    Route::resource('/', \App\Http\Controllers\Admin\HomeController::class);
});

