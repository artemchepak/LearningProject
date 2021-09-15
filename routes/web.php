<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\MovieCategoryController;
use App\Http\Controllers\Admin\MovieController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
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

Route::get('/qwerty', function () {
    return 'admin panel';
});

Route::group(['middleware' => ['web']], function(){
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::redirect('/home', '/');
    Route::get('/movies/category/{id}', [HomeController::class, 'getAllMoviesByCategory'])->name('movie.by.category');
    Route::get('/movies/{id}', [HomeController::class, 'showMovie'])->name('showMovie');
    Route::get('/categories', [HomeController::class, 'categories'])->name('categories');
});

Route::prefix('admin_panel')->group(function () {
    Route::get('/', [\App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin_panel');
    Route::group(['middleware' => ['can:edit movies']], function () {
        Route::resource('movies', MovieController::class);
    });
    Route::group(['middleware' => ['can:edit categories']], function () {
        Route::resource('categories', MovieCategoryController::class);
    });
});

Auth::routes();

Route::get('/http', function () {
    //Заголовки
//    $response = Http::withHeaders([
//        'X-First' => 'foo',
//        'X-Second' => 'bar'
//    ])->post('http://httpbin.org/post', [ "fruit" => "apple"]);
//    return $response->body();

//Параллельные запросы
//    $responses = Http::pool(fn (Illuminate\Http\Client\Pool $pool) => [
//        $pool->get('http://httpbin.org/'),
//        $pool->get('https://google.com/'),
//        $pool->get('https://ru.wikipedia.org//'),
//    ]);
//
//    return $responses[2]->body();

    $users = Http::get('https://reqres.in/api/users');
    return view('test', ['users' => $users['data']]);
});

Route::get('/locale', function (){
    if (App::isLocale('en')) {
        $locale = 'ru';
    } else {
        $locale = 'en';
    }
    App::setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
})->name('locale');


