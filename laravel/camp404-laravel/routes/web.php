<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// beranda
Route::get('/', [MenuController::class, 'home']);
// info kegiatan
Route::get('/info-kegiatan', [MenuController::class, 'info_kegiatan']);
// data siswa
Route::get('data-siswa', [MenuController::class, 'data_siswa']);
// all register
Auth::routes();
// home
// Route::get('/home', [HomeController::class, 'index'])->name('home');
// isAdmin
Route::resource('siswa', SiswaController::class)->middleware('can:isAdmin');
// isSiswa
Route::resource('siswa', SiswaController::class)->only('show')->middleware('can:isAdminSiswa');
