<?php

use App\Http\Controllers\MenuController;
use App\Http\Middleware\EnsureAdmin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/', fn() => view('home'))->name('home');
Route::get('/contact', fn() => view('contact'))->name('contact');

Route::get('/login', fn() => view('login', ['fail' => false]))->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', fn() => view('dashboard', ['user' => Auth::user()]))->middleware(['auth'])->name('dashboard');

Route::get('/menu', [MenuController::class, 'index'])->name('menu');

Route::prefix('/admin')->middleware(['auth', EnsureAdmin::class])->group(function ()
{
    Route::get('/', fn() => view('admin-panel'))->name('admin-panel');
});
