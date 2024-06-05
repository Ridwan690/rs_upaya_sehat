<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\TarifController;
// use App\Http\Controllers\AdminController;
// use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\RekamMedikController;
use App\Http\Controllers\AuthController;

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
    $dokter = \App\Models\Dokter::all();

    return view('rekam.index', compact('dokter'));
});

// Route::resource('pasien', PasienController::class);
// Route::resource('tarif', TarifController::class);

// Route::get('rekam-medik', [RekamMedikController::class, 'index'])->name('rekam.index');
// Route::put('rekam-medik/edit', [RekamMedikController::class, 'edit'])->name('rekam.edit');
// Route::get('rekam-medik/show/{id}', [RekamMedikController::class, 'show'])->name('rekam.show');

// Route::get('admin/home', [AdminController::class, 'index'])->name('admin.home'); // diganti dengan route di atas
// Route::get('admin/daftar', [AdminController::class, 'daftar'])->name('admin.daftar'); // tidak terpakai

// Auth routes
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

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
        // Routes for superadmin
        Route::resource('pasien', PasienController::class);
        Route::get('rekam-medik', [RekamMedikController::class, 'index'])->name('rekam.index');
        Route::put('rekam-medik/edit', [RekamMedikController::class, 'edit'])->name('rekam.edit');
        Route::get('rekam-medik/show/{id}', [RekamMedikController::class, 'show'])->name('rekam.show');
    });

    Route::middleware(['role:superadmin,manajemen'])->group(function () {
        // Routes for manajemen
        Route::resource('tarif', TarifController::class);
    });

    // Define more routes based on roles
});
