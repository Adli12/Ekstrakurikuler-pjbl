<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home');
});


Route::get('/auth', function () {
    return view('auth');
});


Route::get('/dashboard', function () {
    return view('dashboard');
});
