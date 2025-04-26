<?php

use App\Http\Controllers\ObatController;
use App\Http\Controllers\PeriksaController;
use App\Models\Obat;
use App\Models\Periksa;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function(){
    return view('layout.app');
});

// Dokter
Route::get('/dokter/dashboard', function(){
    return view('dokter.dashboard');
})->name('dokter.dashboard');

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
Route::resource('/dokter/periksa', PeriksaController::class)->names('dokter.periksa');

Route::resource('/dokter/obat', ObatController::class)->names('dokter.obat');

// Pasien
Route::get('/pasien/dashboard', function(){
    return view('pasien.dashboard');
})->name('pasien.dashboard');

// no crud function
Route::get('/pasien/periksa', function(){
    return view('pasien.periksa');
})->name('pasien.periksa');

Route::get('/pasien/riwayat', function(){
    $periksas = Periksa::all();
    return view('pasien.riwayat', compact('periksas'));
})->name('pasien.riwayat');

// crud function with resource
// Route::get();

// Authentication
Route::get('/auth/login', function(){
    return view('auth.login');
})->name('auth.login');

Route::get('/auth/register', function(){
    return view('auth.register');
})->name('auth.register');
