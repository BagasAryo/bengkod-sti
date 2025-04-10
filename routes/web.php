<?php

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

Route::get('/dokter/periksa', function(){
    $periksas = Periksa::all();
    return view('dokter.periksa', compact('periksas'));
})->name('dokter.periksa');

Route::get('/dokter/obat', function(){
    $obats = Obat::all();
    return view('dokter.obat', compact('obats'));
})->name('dokter.obat');

// Pasien
Route::get('/pasien/dashboard', function(){
    return view('pasien.dashboard');
})->name('pasien.dashboard');

Route::get('pasien/periksa', function(){
    return view('pasien.periksa');
})->name('pasien.periksa');