<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/siswa', function () {
    return view('siswa');
});
Route::get('/guru', function () {
    return view('guru');
});
Route::get('/belajar', function () {
    echo 'oke';
});
Route::get('/', [\App\Http\Controllers\UserController::class, 'index']);





Route::group(['middleware' => 'guest'], function(){
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
});

Route::group(['middleware' => 'auth'], function(){
    Route::get('/home', [HomeController::class,'index']);
    Route::get('/logout', [AuthController::class,'logout'])->name('logout');
    Route::resource('/admins', \App\Http\Controllers\AdminController::class);
    Route::get('index/search', [\App\Http\Controllers\AdminController::class, 'search']);
});

Route::resource('/user', \App\Http\Controllers\UserController::class);