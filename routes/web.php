<?php

// // Route untuk menampilkan halaman login
// Route::get('/login', function () {
//     return view('login');
// })->name('login');

// // Route untuk memproses login dan redirect ke dashboard dosen
// Route::post('/login', function () {
//     // Redirect ke dashboard dosen setelah login
//     return redirect()->route('dashboard_dekan');
// })->name('process_login');

// // Route untuk halaman dashboard dekan
// Route::get('/dashboard_dekan', function () {
//     return view('dashboard_dekan');
// })->name('dashboard_dekan');

use Illuminate\Support\Facades\Route;

// Route untuk menampilkan halaman login
Route::get('/login', function () {
    return view('login');  // Tampilkan halaman login
})->name('login');

// Route untuk memproses login dan redirect ke dashboard dosen
Route::post('/login', function () {
    // Redirect ke dashboard dosen setelah login
    return redirect()->route('dashboard_dekan');
})->name('process_login');

// Route untuk menampilkan halaman dashboard dekan
Route::get('/dashboard_dekan', function () {
    return view('dashboard_dekan');  // Tampilkan halaman dashboard
})->name('dashboard_dekan');

// // Route untuk menampilkan halaman pemilihan jurusan
// Route::get('/verifikasi_jadwal', function () {
//     return view('pilih_jurusan');
// })->name('verifikasi_jadwal_pilih');

// // Route dinamis untuk verifikasi jadwal berdasarkan jurusan
// Route::get('/verifikasi_jadwal/{jurusan}', function ($jurusan) {
//     return view('verifikasi_jadwal', ['jurusan' => $jurusan]);
// })->name('verifikasi_jadwal');
