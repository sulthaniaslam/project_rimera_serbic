<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\KonsultanController;
use App\Http\Controllers\KontakController;
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

// TRAINING
Route::get('/training', [TrainingController::class, 'index'])->name('training');
Route::get('/training-tambah', [TrainingController::class, 'trainingTambah'])->name('training.tambah');
Route::post('/training-tambah-proses', [TrainingController::class, 'trainingTambahProses'])->name('training.tambah.proses');
Route::get('/training-edit/{id}', [TrainingController::class, 'trainingEdit'])->name('training.edit');
Route::post('/training-edit-proses/{id}', [TrainingController::class, 'trainingEditProses'])->name('training.edit.proses');
Route::delete('/training-hapus/{id}', [TrainingController::class, 'trainingHapus'])->name('training.hapus');
// END TRAINING

// KEGIATAN
Route::get('/kegiatan', [KegiatanController::class, 'index'])->name('kegiatan');
Route::get('/kegiatan-tambah', [KegiatanController::class, 'kegiatanTambah'])->name('kegiatan.tambah');
Route::post('/kegiatan-tambah-proses', [KegiatanController::class, 'kegiatanTambahProses'])->name('kegiatan.tambah.proses');
Route::get('/kegiatan-edit/{id}', [KegiatanController::class, 'kegiatanEdit'])->name('kegiatan.edit');
Route::post('/kegiatan-edit-proses/{id}', [KegiatanController::class, 'kegiatanEditProses'])->name('kegiatan.edit.proses');
Route::delete('/kegiatan-hapus/{id}', [KegiatanController::class, 'kegiatanHapus'])->name('kegiatan.hapus');
// END KEGIATAN

// PARTNER KERJASAMA
Route::get('/partner', [PartnerController::class, 'index'])->name('partner');
Route::get('/partner-tambah', [PartnerController::class, 'partnerTambah'])->name('partner.tambah');
Route::post('/partner-tambah-proses', [PartnerController::class, 'partnerTambahProses'])->name('partner.tambah.proses');
Route::get('/partner-edit/{id}', [PartnerController::class, 'partnerEdit'])->name('partner.edit');
Route::post('/partner-edit-proses/{id}', [PartnerController::class, 'partnerEditProses'])->name('partner.edit.proses');
Route::delete('/partner-hapus/{id}', [PartnerController::class, 'partnerHapus'])->name('partner.hapus');
// END PARTNER KERJASAMA

// PROFIL TRAINER
Route::get('/profil', [ProfiltrainerController::class, 'index'])->name('profil');
Route::get('/profil-tambah', [ProfiltrainerController::class, 'profilTambah'])->name('profil.tambah');
Route::post('/profil-tambah-proses', [ProfiltrainerController::class, 'profilTambahProses'])->name('profil.tambah.proses');
Route::get('/profil-edit/{id}', [ProfiltrainerController::class, 'profilEdit'])->name('profil.edit');
Route::post('/profil-edit-proses/{id}', [ProfiltrainerController::class, 'profilEditProses'])->name('profil.edit.proses');
Route::delete('/profil-hapus/{id}', [ProfiltrainerController::class, 'profilHapus'])->name('profil.hapus');
// END PROFIL TRAINER

// KONTAK
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');
Route::get('/kontak-tambah', [KontakController::class, 'kontakTambah'])->name('kontak.tambah');
Route::post('/kontak-tambah-proses', [KontakController::class, 'kontakTambahProses'])->name('kontak.tambah.proses');
Route::get('/kontak-edit/{id}', [KontakController::class, 'kontakEdit'])->name('kontak.edit');
Route::post('/kontak-edit-proses/{id}', [KontakController::class, 'kontakEditProses'])->name('kontak.edit.proses');
Route::delete('/kontak-hapus/{id}', [KontakController::class, 'kontakHapus'])->name('kontak.hapus');
// END KONTAK
