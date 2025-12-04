<?php

use Illuminate\Support\Facades\Route;

// beranda
Route::get('/', function () {
    return view('beranda');
});

// beranda
Route::get('/beranda', function () {
    return view('beranda');
});

// arsip inovasi
Route::get('arsip-inovasi', function () {
    return view('arsip-inovasi');
});

// kirim ide
Route::get('kirim-ide', function () {
    return view('kirim-ide');
});

// tentang insanova
Route::get('tentang-insanova', function () {
    return view('tentang-insanova');
});

// login
Route::get('/login', function () {
    return view('login');
})->name('login');

// daftar
Route::get('/register', function () {
    return view('register');
})->name('register');