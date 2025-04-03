<?php

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

// Pasien
Route::get('/pasien/dashboard', function(){
    return view('pasien.dashboard');
})->name('pasien.dashboard');
