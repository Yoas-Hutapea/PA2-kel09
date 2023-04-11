<?php

use App\Http\Controllers\Web\PendudukController;
use App\Http\Controllers\Web\DashboardController;
use App\Http\Controllers\Web\AuthController;
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
    return redirect()->route('login');
});

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'do_login'])->name('login');

Route::group(['middleware' => ['role:admin']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/logout', [AuthController::class, 'do_logout'])->middleware('auth:sanctum')->name('logout');

    //Penduduk
    Route::get('/penduduk', [PendudukController::class, 'index'])->name('penduduk.index');
    Route::get('/penduduk/create', [PendudukController::class, 'create'])->name('create_penduduk');
    Route::put('/penduduk/update', [PendudukController::class, 'edit'])->name('update_penduduk');
    Route::delete('/penduduk', [PendudukController::class, 'destroy'])->name('delete_penduduk');
});
