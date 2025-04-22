<?php

use App\Http\Controllers\admin\adminlaporanController;
use App\Http\Controllers\admin\adminAnggotaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\eskul;
use App\Http\Controllers\user\absenController;
use App\Http\Controllers\user\anggotaPostController;
use App\Http\Controllers\user\galleryController;
use App\Http\Controllers\user\laporanController;
use App\Http\Controllers\admin\admingalleryController;
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
Route::middleware(['auth'])->prefix('user')->name('user.')->group(function () {
    Route::get('/dashboard', function () {
        return view('user.dashboard');
    })->name('dashboard');

    // anggota
    Route::get('/anggota', [anggotaPostController::class, 'index'])->name('anggota');
    Route::post('/anggota', [anggotaPostController::class, 'store'])->name('anggota.store');
    Route::put('/anggota/{id}', [anggotaPostController::class, 'update'])->name('anggota.update');
    Route::delete('/anggota/{id}', [anggotaPostController::class, 'destroy'])->name('anggota.destroy');
    Route::post('/anggota/export', [anggotaPostController::class, 'exportPDF'])->name('anggota.export');
    Route::get('/absen', [anggotaPostController::class, 'absen'])->name('anggota.absen');


    // absen
    Route::get('/absen', [absenController::class, 'index'])->name('absen');
    Route::post('/absen', [absenController::class, 'store'])->name('absen.store');

    Route::get('/gallery', [galleryController::class, 'index'])->name('gallery');
    Route::post('/gallery', [galleryController::class, 'store'])->name('gallery.store');
    Route::put('/gallery/{id}', [galleryController::class, 'update'])->name('gallery.update');
    Route::delete('/gallery/{id}', [galleryController::class, 'destroy'])->name('gallery.destroy');

    Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan');
    Route::post('/laporan', [LaporanController::class, 'store'])->name('laporan.store');
    Route::put('/laporan/{id}', [LaporanController::class, 'update'])->name('laporan.update');
    Route::get('/laporan/download/{id}', [LaporanController::class, 'download'])->name('laporan.download');
    Route::delete('/laporan/{id}', [LaporanController::class, 'destroy'])->name('laporan.destroy');
});


// view admin
Route::get('/admin/dashboard', [eskul::class, 'index'])->name('admin.dashboard')->middleware('auth');
Route::get('/admin/eskul/{id}/edit', [eskul::class, 'edit'])->name('admin.eskul.edit');
Route::put('/admin/eskul/{id}', [eskul::class, 'update'])->name('admin.eskul.update');
Route::delete('/admin/eskul/{id}', [eskul::class, 'destroy'])->name('admin.eskul.destroy');

Route::get('/admin/eskul', function () {
    return view('admin.eskul');
})->name('admin.eskul')->middleware('auth');

Route::get('/admin/gallery', [AdminGalleryController::class, 'index'])->name('admin.gallery');

Route::get('/admin/laporan', [adminlaporanController::class, 'index'])->name('admin.laporan');

Route::get('/admin/eskul/{id_eskul}', [adminAnggotaController::class, 'anggotaEskul'])->name('admin.eskul');

// vieww
Route::get('/team', function () {
    return view('team');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});