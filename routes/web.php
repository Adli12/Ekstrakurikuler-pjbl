<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('/home');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard')->middleware('auth');

// view user
Route::get('/user/dashboard', function () {
    return view('user.dashboard');
})->name('user.dashboard')->middleware('auth');

Route::get('/user/anggota', function () {
    return view('user.anggota');
})->name('user.anggota')->middleware('auth');

Route::get('/user/gallery', function () {
    return view('user.gallery');
})->name('user.gallery')->middleware('auth');

Route::get('/user/laporan', function () {
    return view('user.laporan');
})->name('user.laporan')->middleware('auth');
// view admin
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard')->middleware('auth');

Route::get('/admin/anggota', function () {
    return view('admin.eskul');
})->name('admin.eskul')->middleware('auth');

Route::get('/admin/gallery', function () {
    return view('admin.gallery');
})->name('admin.gallery')->middleware('auth');

Route::get('/admin/laporan', function () {
    return view('admin.laporan');
})->name('admin.laporan')->middleware('auth');

// vieww
Route::get('/team', function () {
    return view('team');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});