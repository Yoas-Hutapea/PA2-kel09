<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\PengajuanController;
use App\Http\Controllers\API\KegiatanController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/login', [AuthController::class, 'login']);

//Pengajuan
Route::middleware('auth:sanctum')->get('/pengajuan/{id}', [PengajuanController::class, 'select']);
Route::middleware('auth:sanctum')->get('/pengajuan', [PengajuanController::class, 'select']);
Route::middleware('auth:sanctum')->post('/logout', [AuthController::class, 'logout']);
Route::middleware('auth:sanctum')->post('/pengajuan', [PengajuanController::class, 'create']);
Route::middleware('auth:sanctum')->put('/pengajuan/{id}', [PengajuanController::class, 'update']);
Route::middleware('auth:sanctum')->delete('/pengajuan/{id}', [PengajuanController::class, 'delete']);

Route::get('/kegiatan/{id}', [KegiatanController::class, 'select']);
Route::get('/kegiatan', [KegiatanController::class, 'select']);







