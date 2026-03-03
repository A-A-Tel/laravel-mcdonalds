<?php

use App\Http\Controllers\ContactRequestController;
use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ItemController;
use App\Http\Middleware\EnsureAdmin;

// Public routes

Route::view('/', 'pages.home')->name('home');
Route::view('/contact', 'pages.contact')->name('contact');
Route::get('/menu', [MenuController::class, 'index'])->name('menu');


// Auth routes

Route::controller(AuthController::class)->group(function ()
{
    Route::get('/login', fn() => view('pages.login', ['fail' => false]))->name('login');
    Route::post('/login', 'login')->name('login.attempt');
    Route::post('/logout', 'logout')->middleware('auth')->name('logout');
});


// User routes

Route::middleware('auth')->group(function ()
{
    Route::view('/dashboard', 'pages.dashboard')->name('dashboard');
    Route::controller(ContactRequestController::class)->prefix('contacts')->group(function ()
    {
        Route::get('/', 'index')->name('contacts.index');
        Route::get('/create', 'create')->name('contacts.create');
        Route::post('/', 'store')->name('contacts.store');
    });
});


// Admin routes

Route::prefix('admin')->middleware(['auth', EnsureAdmin::class])
    ->group(function ()
    {
        Route::view('/', 'admin.dashboard')->name('admin.dashboard');
        Route::resource('items', ItemController::class)->names('admin.items');


        Route::controller(ContactRequestController::class)->prefix('contacts')->group(function ()
        {
            Route::get('/', 'adminIndex')->name('admin.contacts.index');
            Route::get('/{contactRequest}/edit', 'edit')->name('admin.contacts.edit');
            Route::get('/{contactRequest}', 'show')->name('admin.contacts.show');
            Route::patch('/{contactRequest}', 'update')->name('admin.contacts.update');
            Route::delete('/{contactRequest}', 'destroy')->name('admin.contacts.destroy');
        });
    });
