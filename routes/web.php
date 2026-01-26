<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('pages.login');
});
Route::post('/login', [AuthController::class,'login']);
Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/edit', [DashboardController::class, 'edit']);
Route::post('/update', [DashboardController::class, 'update']);
Route::get('/peminjam', function () {
    return view('pages.peminjam');
});
Route::get('/siswa', function () {
    return view('pages.daftar-siswa');
});
Route::get('/riwayat', function () {
    return view('pages.riwayat');
});
