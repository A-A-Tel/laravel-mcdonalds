<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

Route::get('/', fn () => view('home'))->name('home');
Route::get('/contact', fn () => view('contact'))->name('contact');

Route::get('/login', fn () => view('login', ['fail' => false]))->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])->middleware(['auth']);

Route::get('/dashboard', fn () => view('dashboard', ['user' => Auth::user()]))->middleware(['auth'])->name('dashboard');
