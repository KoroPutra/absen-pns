<?php

use App\Http\Controllers\PegawaiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pegawai', [PegawaiController::class, 'index'])->name('pegawai.index');
Route::get('/pegawai/tambah', [PegawaiController::class, 'tambah'])->name('pegawai.tambah');
Route::post('/pegawai/submit', [PegawaiController::class, 'submit'])->name('pegawai.submit');
Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit'])->name('pegawai.edit');
Route::put('/pegawai/edit/{id}', [PegawaiController::class, 'update'])->name('pegawai.edit');
Route::post('/pegawai/delete/{id}', [PegawaiController::class, 'delete'])->name('pegawai.delete');
