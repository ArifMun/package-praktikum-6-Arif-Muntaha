<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DatabukuController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\MenuController;

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
Route::get('/masakan', function () {
    return view('menu-masakan');
});
Route::get('/tampil_mahasiswa', function () {
    return view('data-mahasiswa');
});
Route::get('/daftar-mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/data-buku', [DatabukuController::class, 'index']);
Route::get('/form-isidata', [FormController::class, 'index']);
//data barang
Route::get('/daftar-barang', [BarangController::class, 'data']);
//latian
// Route::get('/guru/{nama}', [GuruController::class, 'index']);
// Route::get('/formulir', [GuruController::class, 'formulir']);
// Route::post('/formulir/proses', [GuruController::class, 'formulir_proses']);
//data makanan
Route::get('/pilihmenu', [MenuController::class, 'formulir_proses']);
Route::get('/formulir', [MenuController::class, 'formulir']);
Route::post('/formulir/proses', [MenuController::class, 'formulir_proses']);