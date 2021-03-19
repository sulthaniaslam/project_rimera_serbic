<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\KonsultanController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ProfiltrainerController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\StrukturorganisasiController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\VisimisiController;

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
    return view('templates.halaman_utama');
});

Route::get('/training', [TrainingController::class, 'index'])->name('training');
Route::get('/training-tambah', [TrainingController::class, 'trainingTambah'])->name('training.tambah');
Route::post('/training-tambah-proses', [TrainingController::class, 'trainingTambahProses'])->name('training.tambah.proses');
