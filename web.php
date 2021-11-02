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

//nomer 1 
Route::get('/guru/{nama}', [GuruController::class, 'index']);
Route::get('/formulir', [GuruController::class, 'formulir']);
Route::post('/formulir/proses', [GuruController::class, 'formulir_proses']);
//data makanan
Route::get('/pilihmenu', [MenuController::class, 'formulir_proses']);
Route::get('/formulir', [MenuController::class, 'formulir']);
Route::post('/formulir/proses', [MenuController::class, 'formulir_proses']);
