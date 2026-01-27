<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('pages.login');
});
Route::post('/login', [AuthController::class,'login']);
Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/edit', [ProfileController::class, 'edit']);
Route::post('/update', [ProfileController::class, 'update']);
Route::get('/peminjam', function () {
    return view('pages.peminjam');
});
Route::get('/siswa', function () {
    return view('pages.daftar-siswa');
});
Route::get('/riwayat', function () {
    return view('pages.riwayat');
});
