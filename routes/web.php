<?php

use App\Http\Controllers\PerawatController;
use App\Models\Antrian;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\TarifController;
use App\Http\Controllers\AdminController;
// use App\Http\Controllers\RegistrationController; // tidak terpakai
use App\Http\Controllers\RekamMedikController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\RawatJalanController;
use App\Http\Controllers\RawatInapController;
use App\Http\Controllers\AntrianController;
use App\Http\Controllers\KunjunganController;
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

// Landing Page
Route::get('/', function () {
    return view('landingPage.index');
});
Route::get('about', function () {
    return view('landingPage.about');
});
Route::get('layanan', function () {
    return view('landingPage.layanan');
});
Route::get('kamar', function () {
    return view('landingPage.kamar');
});
Route::get('contact', function () {
    return view('landingPage.contact');
});
Route::get('rawatinap', function () {
    return view('landingPage.rawat-inap');
});
Route::get('rawatjalan', function () {
    return view('landingPage.rawat-jalan');
});


Route::get('/cobarelasi', function(){
    $rawatJalan = \App\Models\RawatJalan::all();

    return view('antrian.index', compact('rawatJalan'));
});

// Route::resource('pasien', PasienController::class);
// Route::resource('tarif', TarifController::class);

// Route::get('rekam-medik', [RekamMedikController::class, 'index'])->name('rekam.index');
// Route::put('rekam-medik/edit', [RekamMedikController::class, 'edit'])->name('rekam.edit');
// Route::get('rekam-medik/show/{id}', [RekamMedikController::class, 'show'])->name('rekam.show');

// Route::get('admin/home', [AdminController::class, 'index'])->name('admin.home'); // tidak terpakai
// Route::get('admin/daftar', [AdminController::class, 'daftar'])->name('admin.daftar'); // tidak terpakai

// Auth routes


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Define routes with auth middleware
Route::middleware(['auth'])->group(function () {
    Route::get('admin/dashboard', [AdminController::class, 'index'])->name('dashboard');

    // Define routes with role middleware
    Route::middleware(['role:superadmin,administrator,perawat'])->group(function () {
        // Routes for superadmin,manajemen,perawat_pendaftaran
        Route::resource('pasien', PasienController::class);
        Route::post('daftar-ulang', [PasienController::class, 'daftarUlang'])->name('daftarUlang');
        Route::get('rekam-medik', [RekamMedikController::class, 'index'])->name('rekam.index');
        Route::get('rekam-medik/{id}/edit', [RekamMedikController::class, 'edit'])->name('rekam.edit');
        Route::get('rekam-medik/show/{id}', [RekamMedikController::class, 'show'])->name('rekam.show');
        Route::put('rekam-medik/{id}', [RekamMedikController::class, 'update'])->name('rekam.update');
        Route::resource('rawat-jalan', RawatJalanController::class);
        Route::resource('rawat-inap', RawatInapController::class);
        Route::resource('antrian', AntrianController::class);
        Route::resource('kunjungan', KunjunganController::class);
        Route::get('antrian/{id}/print', [AntrianController::class, 'print'])->name('antrian.print');
        Route::get('rekam-medik/{id}/print', [RekamMedikController::class, 'printPatientCard'])->name('rekam.printPatientCard');
    });

    Route::middleware(['role:superadmin,administrator'])->group(function () {
        // Routes for superadmin, manajemen
        Route::resource('tarif', TarifController::class);
        Route::get('/total-harga/{jenis}/{id}', [TarifController::class, 'totalHarga'])->name('totalHarga');
        Route::get('/{jenis}/{id}/print', [ObatController::class, 'print'])->name('obat.print');
        Route::resource('dokter', DokterController::class);
        Route::resource('perawat', PerawatController::class);
        Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
        Route::post('/register', [AuthController::class, 'register']);
        Route::resource('jadwal', JadwalController::class);
        Route::get('/get-dokter/{poli_id}', [DokterController::class, 'getDokterByPoli'])->name('getDokterByPoli');


    });

    // Define more routes based on roles
});
