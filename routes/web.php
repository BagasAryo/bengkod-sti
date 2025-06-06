<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\PeriksaController;
use App\Http\Controllers\PeriksaPasienController;
use App\Http\Controllers\RiwayatController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function(){
//     return view('layout.app');
// });

// Dokter
// Route::get('/dokter/dashboard', function(){
//     return view('dokter.dashboard');
// })->name('dokter.dashboard');

// no crud function
// Route::get('/dokter/periksa', function(){
//     $periksas = Periksa::all();
//     return view('dokter.periksa', compact('periksas'));
// })->name('dokter.periksa');

// Route::get('/dokter/obat', function(){
//     $obats = Obat::all();
//     return view('dokter.obat', compact('obats'));
// })->name('dokter.obat');

// crud function with ::resource
// Route::resource('/dokter/periksa', PeriksaController::class)->names('dokter.periksa');

// Route::resource('/dokter/obat', ObatController::class)->names('dokter.obat');


// Pasien
// Route::get('/pasien/dashboard', function () {
//     return view('pasien.dashboard');
// })->name('pasien.dashboard');

// no crud function
// Route::get('/pasien/periksa', function(){
//     return view('pasien.periksa');
// })->name('pasien.periksa');

// Route::get('/pasien/riwayat', function(){
//     $periksas = Periksa::all();
//     return view('pasien.riwayat', compact('periksas'));
// })->name('pasien.riwayat');

// crud function with resource
// Route::resource('/pasien/periksa', PeriksaPasienController::class)->names('pasien.periksa');

// Route::resource('/pasien/riwayat', RiwayatController::class)->names('pasien.riwayat');


// Authentication
// Route::get('/auth/login', function(){
//     return view('auth.login');
// })->name('auth.login');

// Route::get('/auth/register', function(){
//     return view('auth.register');
// })->name('auth.register');

// role group Dokter
Route::prefix('dokter')->middleware(["auth", 'role:dokter'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dokter.dashboard');
    })->name('dokter.dashboard');

    Route::resource('/periksa', PeriksaController::class)->names('dokter.periksa');
    Route::resource('/obat', ObatController::class)->names('dokter.obat');
});


// role group pasien
Route::prefix('pasien')->middleware(["auth", 'role:pasien'])->group(function () {
    Route::get('/dashboard', function () {
        return view('pasien.dashboard');
    })->name('pasien.dashboard');

    Route::resource('/periksa', PeriksaPasienController::class)->names('pasien.periksa');

    Route::resource('/riwayat', RiwayatController::class)->names('pasien.riwayat');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.perform');

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.perform');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/denied', function () {
    return view('auth.denied', ['error' => session('error')]);
})->name('denied');
