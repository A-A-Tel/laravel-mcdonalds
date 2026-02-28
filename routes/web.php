<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/login', 'App\Http\Controllers\LoginController@login')->name('login');
