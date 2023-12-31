<?php

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

use App\Http\Controllers\BarangController;

Route::get('/input_barang', [BarangController::class, 'index'])->name('input');
Route::post('/proses_barang', [BarangController::class, 'store']);

Route::get('/show', [BarangController::class, 'show'])->name('show');

Route::get('/edit/{id}', [BarangController::class, 'edit'])->name('edit');
Route::put('/update/{id}', [BarangController::class, 'update'])->name('update');

Route::get('/delete/{id}', [BarangController::class, 'destroy'])->name('delete');
