<?php

use App\Http\Controllers\NoteController;
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
Route::redirect('/home', '/');
Route::view('/', 'home')->name('home');

//Route::get('/notes', [NoteController::class, 'index'])->name('notes');
//Route::get('/notes/create', [NoteController::class, 'create'])->name('notes.create');
//Route::post('/notes', [NoteController::class, 'store'])->name('notes.store');
//Route::get('/notes/{note}', [NoteController::class, 'show'])->name('notes.show');
//Route::get('/notes/{note}/edit', [NoteController::class, 'edit'])->name('notes.edit');
//Route::put('/notes/{note}', [NoteController::class, 'update'])->name('notes.update');
//Route::delete('/notes/{note}', [NoteController::class, 'delete'])->name('notes.delete');

Route::resource('notes', NoteController::class);
