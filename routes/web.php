<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\TarifController;
use App\Http\Controllers\AdminController;
// use App\Http\Controllers\RegistrationController;

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

Route::get('/', function () {
    return view('index');
});
Route::get('about', function () {
    return view('about');
});
Route::get('layanan', function () {
    return view('layanan');
});
Route::get('kamar', function () {
    return view('kamar');
});

Route::resource('pasien', PasienController::class);
Route::resource('tarif', TarifController::class);

Route::get('admin/home', [AdminController::class, 'index'])->name('admin.home');
Route::get('admin/daftar', [AdminController::class, 'daftar'])->name('admin.daftar');


