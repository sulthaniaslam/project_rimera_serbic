<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FrontController;
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

// Route::get('/', function () {
//     return view('templates.halaman_utama');
// });
Route::get('/', [FrontController::class, 'index'])->name('/');

// Sejarah
Route::get('/sejarah', [SejarahController::class, 'index'])->name('sejarah');
Route::get('/sejarah_tambah', [SejarahController::class, 'create'])->name('sejarah_tambah');
Route::POST('/sejarah_tambah', [SejarahController::class, 'store'])->name('sejarah_tambah');
Route::get('/sejarah_edit/{id_sejarah}', [SejarahController::class, 'edit'])->name('edit_sejarah');
Route::POST('/sejarah_edit/{id_sejarah}', [SejarahController::class, 'update'])->name('edit_sejarah');
Route::DELETE('/hapus_sejarah/{id_sejarah}', [SejarahController::class, 'destroy'])->name('hapus_sejarah');

// Visi Misi
Route::get('/visi_misi', [VisimisiController::class, 'index'])->name('visi_misi');
Route::get('/visi_misi_tambah', [VisimisiController::class, 'create'])->name('visi_misi_tambah');
Route::POST('/visi_misi_tambah', [VisimisiController::class, 'store'])->name('visi_misi_tambah');
Route::get('/edit/{id_vm}', [VisimisiController::class, 'edit'])->name('edit_visi_misi');
Route::POST('/edit/{id_vm}', [VisimisiController::class, 'update'])->name('edit_visi_misi');
Route::DELETE('/hapus/{id_vm}', [VisimisiController::class, 'destroy'])->name('hapus_visi_misi');

// Struktur Organisasi
Route::get('/struktur_organisasi', [StrukturorganisasiController::class, 'index'])->name('struktur_organisasi');
Route::get('/struktur_organisasi_tambah', [StrukturorganisasiController::class, 'create'])->name('struktur_organisasi_add');
Route::POST('/struktur_organisasi_tambah', [StrukturorganisasiController::class, 'store'])->name('struktur_organisasi_add');
Route::get('/edit_organisasi/{id_so}', [StrukturorganisasiController::class, 'edit'])->name('struktur_organisasi_edit');
Route::POST('/edit_organisasi/{id_so}', [StrukturorganisasiController::class, 'update'])->name('struktur_organisasi_edit');
Route::DELETE('/hapus_so/{id_so}', [StrukturorganisasiController::class, 'destroy'])->name('struktur_organisasi_hapus');


Route::get('/training', [TrainingController::class, 'index'])->name('training');
Route::get('/training-tambah', [TrainingController::class, 'trainingTambah'])->name('training.tambah');
Route::post('/training-tambah-proses', [TrainingController::class, 'trainingTambahProses'])->name('training.tambah.proses');
