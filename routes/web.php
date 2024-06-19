<?php

use App\Models\Antrian;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\TarifController;
// use App\Http\Controllers\AdminController; // tidak terpakai
// use App\Http\Controllers\RegistrationController; // tidak terpakai
use App\Http\Controllers\RekamMedikController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\RawatJalanController;
use App\Http\Controllers\RawatInapController;
use App\Http\Controllers\AntrianController;
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
Route::get('contact', function () {
    return view('contact');
});
Route::get('rawat-inap', function () {
    return view('rawat-inap');
});
Route::get('rawat-jalan', function () {
    return view('rawat-jalan');
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
    Route::get('admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    // Define routes with role middleware
    Route::middleware(['role:superadmin,manajemen,perawat_pendaftaran'])->group(function () {
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
        Route::get('antrian/{id}/print', [AntrianController::class, 'print'])->name('antrian.print');
        Route::get('rekam-medik/{id}/print', [RekamMedikController::class, 'printPatientCard'])->name('rekam.printPatientCard');
    });

    Route::middleware(['role:superadmin,manajemen'])->group(function () {
        // Routes for superadmin, manajemen
        Route::resource('tarif', TarifController::class);
        // Route::resource('dokter', DokterController::class);
        Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
        Route::post('/register', [AuthController::class, 'register']);
        Route::resource('jadwal', JadwalController::class);
        Route::get('/get-dokter/{poli_id}', [DokterController::class, 'getDokterByPoli'])->name('getDokterByPoli');


    });

    // Define more routes based on roles
});
