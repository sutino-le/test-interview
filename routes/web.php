<?php

use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Login;
use App\Http\Controllers\Productstock;
use App\Http\Controllers\Register;
use App\Http\Controllers\User;
use App\Http\Controllers\UserApi;
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
//     return view('login/login');
// })->middleware('guest');


// Route untuk mengarah ke controller Register dan method nya index
Route::get('/', [Login::class, 'index'])->name('login')->middleware('guest');
// Route untuk mengarah ke controller Login dan method nya authenticate
Route::post('/login', [Login::class, 'authenticate']);

// Route untuk mengarah ke controller Login dan method nya logout
Route::get('/logout', [Login::class, 'logout']);


// Route untuk mengarah ke controller Register dan method nya index
Route::get('/register', [Register::class, 'index'])->middleware('guest');
// Route untuk mengarah ke controller Register dan method nya daftar
Route::post('/register', [Register::class, 'daftar']);


// Route untuk mengarah ke controller Dashboard dan method nya index
Route::get('/dashboard', [Dashboard::class, 'index'])->middleware('auth');


// Route untuk mengarah ke controller User dan method nya index
Route::get('/user', [User::class, 'index'])->middleware('auth');
// Route untuk mengarah ke controller User dan method nya create
Route::get('/createUser', [User::class, 'create'])->middleware('auth');
// Route untuk mengarah ke controller User dan method nya userSimpan
Route::post('/userSimpan', [User::class, 'userSimpan'])->middleware('auth');


Route::resource('user', User::class)->middleware('auth');


// Route untuk mengarah ke controller Productstock dan method nya index
Route::get('/product-stock', [Productstock::class, 'index'])->middleware('auth');

// Route untuk mengarah ke controller UserApi dan method nya index
Route::get('/user-api', [UserApi::class, 'index'])->middleware('auth');
