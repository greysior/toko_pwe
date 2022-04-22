<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\ProfilController;
use  App\Http\Controllers\AktivitasController;
use  App\Http\Controllers\AlamatController;
use  App\Http\Controllers\AlumniController;
use  App\Http\Controllers\FavoritController;
use  App\Http\Controllers\FilmController;
use  App\Http\Controllers\GameController;
use  App\Http\Controllers\KeluargaController;
use  App\Http\Controllers\MatkulController;
use  App\Http\Controllers\UsiaController;
use  App\Http\Controllers\WarnaController;
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
    return view('welcome');
});

Route::get('/nama', function () {
    echo "Gilang Ramadhan";
});
Route::get('/kodemahasiswa', function () {
  echo "G1A020039";
});
Route::get('/nama/sejarah', function () {
  echo "sejarah hidup saya, belum ada sejarah";
});
Route::get('/kelahiran', function () {
  echo "asal Bengkulu";
});
Route::get('/hobi', function () {
  echo "Bermain Game dan Membaca Novel";
});
Route::get('/motivasi', function () {
  echo "gaada motivasi";
});
Route::get('/halamanutama', function () {
  echo "Ini adalah halaman utama";
});
Route::get('/about', function () {
  echo "tentang saya";
});
Route::get('/status', function () {
  echo "Mahasiswa Aktif ";
});
Route::get('/smester', function () {
  echo "sedang menempuh smester 4";
});


Route::get('/profil', [ProfilController::class, 'index']);
Route::get('/aktivitas', [AktivitasController::class, 'index']);
Route::get('/alamat', [AlamatController::class, 'index']);
Route::get('/alumni', [AlumniController::class, 'index']);
Route::get('/favorit', [FavoritController::class, 'index']);
Route::get('/film', [FilmController::class, 'index']);
Route::get('/game', [GameController::class, 'index']);
Route::get('/keluarga', [KeluargaController::class, 'index']);
Route::get('/matkul', [MatkulController::class, 'index']);
Route::get('/usia', [UsiaController::class, 'index']);
Route::get('/warna', [WarnaController::class, 'index']);