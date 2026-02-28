<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('home'));

Route::get('/contact', fn () => view('contact'));

Route::get('/login', fn () => view('login'));
Route::post('/login', 'App\Http\Controllers\LoginController@login')->name('login');
