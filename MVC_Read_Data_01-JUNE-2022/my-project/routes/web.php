<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\usersinfos;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/registration', function () {
    return view('registration');
});

Route::get('/about_us', function () {
    return view('about_us');
});

Route::get('/contact_us', function () {
    return view('contact_us');
});

Route::get('/', [usersinfos::class,'index']);

Route::get('/register_data', [RegisterController::class,'getdata']);
Route::get('/getid', [RegisterController::class,'getid']);