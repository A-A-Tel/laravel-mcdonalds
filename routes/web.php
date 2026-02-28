<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;

Route::get('/', fn () => view('home'));
Route::get('/contact', fn () => view('contact'));

Route::get('/login', fn () => view('login'));
Route::post('/login', [LoginController::class, 'login']);

Route::get('/dashboard', [DashboardController::class, 'index']);
