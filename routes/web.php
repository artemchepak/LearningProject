<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\MovieCategoryController;
use App\Http\Controllers\Admin\MovieController;
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
Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::redirect('/home', '/');
Route::get('/movies/category/{id}', [HomeController::class, 'getAllMoviesByCategory'])->name('movie.by.category');
Route::get('/movies/{id}', [HomeController::class, 'showMovie'])->name('showMovie');
Route::get('/categories', [HomeController::class, 'categories'])->name('categories');

Route::middleware(['auth', 'role:admin'])->prefix('admin_panel')->group(function () {
    Route::get('/', [\App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin_panel');
    Route::resource('movies', MovieController::class);
    Route::resource('categories', MovieCategoryController::class);
});

Route::view('/test', 'test');
