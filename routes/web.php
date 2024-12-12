<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::get('/home', function () {
    return view('home');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/marketplace', function () {
    return view('marketplace');
});

Route::get('/marketplace', [App\Http\Controllers\MarketplaceController::class, 'index']);




