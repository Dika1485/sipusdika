<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PeminjamController;

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

Route::get('/', [TransaksiController::class, 'read_belum']);
Route::post('/insert',[TransaksiController::class, 'insert']);
Route::get('/insert',[TransaksiController::class, 'read_id']);
Route::get('/update',[TransaksiController::class, 'update']);
Route::get('/history',[TransaksiController::class, 'read_sudah']);
Route::get('/peminjam',[PeminjamController::class, 'read']);
Route::get('/buku',[BukuController::class, 'read']);
