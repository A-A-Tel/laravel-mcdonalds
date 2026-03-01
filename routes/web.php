<?php

use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/', fn () => view('home'))->name('home');
Route::get('/contact', fn () => view('contact'))->name('contact');

Route::get('/login', fn () => view('login', ['fail' => false]))->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', fn () => view('dashboard', ['user' => Auth::user()]))->middleware(['auth'])->name('dashboard');

Route::get('/order', [OrderController::class, 'index'])->middleware(['auth'])->name('order');
