<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('pages.login');
});
Route::get('/dashboard', function () {
    return view('pages.dashboard');
});
Route::get('/peminjam', function () {
    return view('pages.peminjam');
});
Route::get('/siswa', function () {
    return view('pages.daftar-siswa');
});
Route::get('/riwayat', function () {
    return view('pages.riwayat');
});