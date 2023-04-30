<?php

use App\Http\Controllers\Web\PendudukController;
use App\Http\Controllers\Web\PerangkatDesaController;
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

    Route::get('/penduduk/create', [PendudukController::class, 'create'])->name('penduduk.create');
    Route::post('/penduduk/create', [PendudukController::class, 'store'])->name('create-penduduk');

    Route::get('/penduduk/{penduduk}', [PendudukController::class, 'edit'])->name('penduduk.update');
    Route::put('/penduduk/{penduduk}', [PendudukController::class, 'update'])->name('update-penduduk');

    Route::delete('/penduduk/{penduduk}', [PendudukController::class, 'destroy'])->name('delete-penduduk');

    //Perangkat Desa
    Route::get('/perangkat', [PerangkatDesaController::class, 'index'])->name('perangkat.index');

    Route::get('/perangkat/create', [PerangkatDesaController::class, 'create'])->name('perangkat.create');
    Route::post('/perangkat/create', [PerangkatDesaController::class, 'store'])->name('create-perangkat');

    Route::get('/perangkat/{perangkat}', [PerangkatDesaController::class, 'edit'])->name('perangkat.update');
    Route::put('/perangkat/{perangkat}', [PerangkatDesaController::class, 'update'])->name('update-perangkat');

    Route::delete('/perangkat/{perangkat}', [PerangkatDesaController::class, 'destroy'])->name('delete-perangkatd');

});
