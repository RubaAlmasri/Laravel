<?php

use App\Http\Controllers\MoviesController;
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

Route::get('/', function () {
    return view('welcome');
});


// Route::resource('add', MoviesController::class);

Route::get('/movies', [MoviesController::class,'index']);

Route::get('/movies/create', [MoviesController::class,'create']);

Route::post('/movies', [MoviesController::class,'store']);

Route::get('/movies/{movie}', [MoviesController::class,'show']);

Route::get('/movies/{movie}/edit', [MoviesController::class,'edit']);

Route::put('/movies/{movie}', [MoviesController::class,'update']);

Route::delete('/movies/{movie}', [MoviesController::class,'destroy']);


Route::resource('movies', MoviesController::class);
