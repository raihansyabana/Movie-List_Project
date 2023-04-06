<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\UserController;
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

Route::get('/', [GuestController::class, 'index']);
Route::get('/movie-detail/{id}', [GuestController::class, 'movieDetail'])->name('movie-detail');
Route::get('/movie-genre/{id}', [GuestController::class, 'movieGenre'])->name('movie-genre');
Route::get('/movie-search', [GuestController::class, 'movieSearch'])->name('movie-search');
Route::post('/movie-search', [GuestController::class, 'movieSearch']);
Route::get('/actors', [GuestController::class, 'actors'])->name('actors');
Route::get('/actor/{id}', [GuestController::class, 'actor'])->name('actor');
Route::post('/actors', [GuestController::class, 'searchActor']);

Route::get('/profile', [UserController::class, 'updateProfile'])->middleware('auth')->name('profile');
Route::post('/profile', [UserController::class, 'storeUpdateProfile'])->middleware('auth');
Route::get('/add-watchlist/{id}', [UserController::class, 'addWatchlist'])->middleware('User')->name('add-watchlist');
Route::get('/watchlist', [UserController::class, 'watchList'])->middleware('User')->name('watchlist');
Route::post('/watchlist', [UserController::class, 'changeWatchlist'])->middleware('User');
Route::post('/watchlist/search', [UserController::class, 'searchWatchlist'])->middleware('User')->name('watchlist-search');

Route::get('/add-new/actor', [AdminController::class, 'createActor'])->middleware('Admin')->name('new-actor');
Route::post('/add-new/actor', [AdminController::class, 'storeActor'])->middleware('Admin');
Route::get('/edit/actor/{id}', [AdminController::class, 'updateActor'])->middleware('Admin')->name('edit-actor');
Route::post('/edit/actor', [AdminController::class, 'storeUpdateActor'])->middleware('Admin');
Route::get('/delete/actor/{id}', [AdminController::class, 'deleteActor'])->middleware('Admin')->name('delete-actor');
Route::get('/add-new/movie', [AdminController::class, 'createMovie'])->middleware('Admin')->name('new-movie');
Route::post('/add-new/movie', [AdminController::class, 'storeMovie'])->middleware('Admin');
Route::get('/edit/movie/{id}', [AdminController::class, 'updateMovie'])->middleware('Admin')->name('edit-movie');
Route::post('/edit/movie', [AdminController::class, 'storeUpdateMovie'])->middleware('Admin');
Route::get('/delete/movie/{id}', [AdminController::class, 'deleteMovie'])->middleware('Admin')->name('delete-movie');

require __DIR__.'/auth.php';
