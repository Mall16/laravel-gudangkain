<?php

use App\Http\Controllers\kainController;
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

Route::get('/kain', [kainController::class, 'index']);
Route::get('/kain/tambah', [kainController::class, 'create']);
Route::post('/kain/store', [kainController::class, 'store']);
Route::get('/kain/edit/{id}', [kainController::class, 'edit']);
Route::put('/kain/update/{id}', [kainController::class, 'update']);
Route::get('/kain/hapus/{id}', [kainController::class, 'delete']);
Route::get('/kain/destroy/{id}', [kainController::class, 'destroy']);

Route::get('/kain/cetak', [kainController::class, 'cetak']);

