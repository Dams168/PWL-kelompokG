<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PemasukannController;
use App\Http\Controllers\PengeluaranController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PenggunaController;


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
Route::get('/', function () {
    return view('welcome');
});


Route::get('/pemasukan', [PemasukannController::class, 'index'])->name('pemasukan.Data-Pemasukan');
Route::get('/pengeluaran', [PengeluaranController::class, 'index'])->name('pengeluaran.Data-Pengeluaran');
Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan.Data-Laporan');
Route::get('/pengguna', [PenggunaController::class, 'index'])->name('pengguna.Data-Pengguna');
Route::get('/dashboard', function () {return view('dashboard.home');});
