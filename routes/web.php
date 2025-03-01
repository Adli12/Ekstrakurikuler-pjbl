<?php

use Illuminate\Support\Facades\Route;

Route::get('/Home', function () {
    return view('Home');
});


Route::get('/auth', function () {
    return view('auth');
});


Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/team', function () {
    return view('team');
});

Route::get('/contact', function () {
    return view('contact');
});


