<?php

use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ItemController;
use App\Http\Middleware\EnsureAdmin;

// Public routes

Route::view('/', 'home')->name('home');
Route::view('/contact', 'contact')->name('contact');
Route::get('/menu', [MenuController::class, 'index'])->name('menu');


// Auth routes

Route::controller(AuthController::class)->group(function () {
    Route::get('/login', fn () => view('login', ['fail' => false]))->name('login');
    Route::post('/login', 'login')->name('login.attempt');
    Route::post('/logout', 'logout')->middleware('auth')->name('logout');
});


// User routes

Route::middleware('auth')->group(function () {
    Route::view('/dashboard', 'dashboard')->name('dashboard');
});


// Admin routes

Route::prefix('admin')
    ->middleware(['auth', EnsureAdmin::class])
    ->group(function () {

        Route::view('/', 'admin.dashboard')->name('admin.dashboard');

        Route::resource('items', ItemController::class)
            ->names('admin.items');
    });
