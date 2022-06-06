<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\usersinfos;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\calculatorController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\validation;

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

// Route::get('/registration', function () {
//     return view('registration');
// });

// Route::get('/about_us', function () {
//     return view('about_us');
// });

// Route::get('/contact_us', function () {
//     return view('contact_us');
// });

// Route::get('/', [usersinfos::class,'index']);

// Route::get('/register_data', [RegisterController::class,'getdata']);
// Route::get('/getid', [RegisterController::class,'getid']);
////////////////////////////////////////////////////////////////////2-6

// Route::get('/home', function () {
//     return view('2june/home');
// });

// Route::get('/login', function () {
//     return view('2june/login');
// });


// Route::get('/home', [MasterController::class,'homepage']);
// Route::get('/login', [loginController::class,'loginpage']);
// Route::get('/calculator', [calculatorController::class,'calculator']);


Route::resource('register', validation::class);

Route::get('/crud', [EmployeeController::class,'index']);
// Route::get('crud/{id}', [EmployeeController::class,'destroy']);
// Route::get('crud/{id}', [EmployeeController::class,'edit']);

Route::resource('crud', EmployeeController::class);
