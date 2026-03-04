<?php

use App\Http\Controllers\ContactRequestController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ReservationRequestController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ItemController;
use App\Http\Middleware\EnsureAdmin;

// Public routes

Route::view('/', 'pages.home')->name('home');
Route::view('/contact', 'pages.contact')->name('contact');
Route::view('/reservation', 'pages.reservation')->name('reservation');
Route::get('/menu', [MenuController::class, 'index'])->name('menu');


// Auth routes

Route::controller(AuthController::class)->group(function ()
{
    Route::get('/login', fn() => view('pages.login'))->name('login');
    Route::get('/register', fn() => view('pages.register'))->name('register');
    Route::post('/register', fn() => view('pages.register'))->name('register.attempt');
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
    Route::controller(ReservationRequestController::class)->prefix('reservations')->group(function ()
    {
        Route::get('/', 'index')->name('reservations.index');
        Route::get('/create', 'create')->name('reservations.create');
        Route::post('/', 'store')->name('reservations.store');
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
            Route::get('/{contactRequest}', 'show')->name('admin.contacts.show');
            Route::patch('/{contactRequest}', 'update')->name('admin.contacts.update');
            Route::delete('/{contactRequest}', 'destroy')->name('admin.contacts.destroy');
        });
        Route::controller(ReservationRequestController::class)->prefix('reservations')->group(function ()
        {
            Route::get('/', 'adminIndex')->name('admin.reservations.index');
            Route::get('/{reservationRequest}', 'show')->name('admin.reservations.show');
            Route::patch('/{reservationRequest}', 'update')->name('admin.reservations.update');
            Route::delete('/{reservationRequest}', 'destroy')->name('admin.reservations.destroy');
        });
    });
