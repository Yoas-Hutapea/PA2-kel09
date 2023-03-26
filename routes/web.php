<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
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
    return view('auth.login');
});

Route::post('register', [RegisterController::class, 'signup']);
Route::post('login', [LoginController::class, 'signin']);

Route::get('/register', function () {
    return view('auth.register');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
