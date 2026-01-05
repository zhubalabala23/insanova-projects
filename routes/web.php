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

Route::get('/best-six-innovators', function () {
    return view('best-6/best-six-innovators-2025');
})->name('best-six-innovators');

Route::get('/best-six-innovators-2024', function () {
    return view('best-6/best-six-innovators-2024');
})->name('best-six-innovators-2024');

Route::get('/best-six-innovators-2023', function () {
    return view('best-6/best-six-innovators-2023');
})->name('best-six-innovators-2023');