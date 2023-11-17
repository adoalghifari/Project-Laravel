<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\RuanganController;
use App\Http\Controllers\KategoriController;

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

Route::middleware(['auth'])->group(function () {
    Route::resource('user', UserController::class);
    Route::resource('ruangan', RuanganController::class);
    Route::resource('kategori', KategoriController::class);
    Route::resource('barang', BarangController::class);
});

Route::get('/', function () {
    return view('home');
});


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
