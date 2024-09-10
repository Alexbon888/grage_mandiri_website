<?php

use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;

// Default
Route::get('/', function () {
    return view('landing_page/home');
});

// Navbar landing page
Route::get('home', function () {
    return view('landing_page/home');
});

Route::get('about_us', function () {
    return view('landing_page/about_us');
});

Route::get('services', function () {
    return view('landing_page/services');
});

// Login dan registrasi
Route::get('/login', [UserController::class, 'showLoginForm'])->name('login')->middleware('guest');
Route::post('/login', [UserController::class, 'authenticate'])->name('login.authenticate');
Route::post('/register', [UserController::class, 'register'])->name('register.submit');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

// User Routes
Route::get('order', [ReservasiController::class, 'create'])->name('order.create');
Route::get('history', [ReservasiController::class, 'userIndex'])->name('order.index');

// Admin Routes
Route::get('admin', function () {
    return view('login_admin');
});

Route::get('admin_pesanan', [ReservasiController::class, 'adminIndex'])->name('admin.index');

Route::get('admin_item', [ItemController::class, 'index'])->name('admin.index1');

// Controller
Route::resource('reservasi', ReservasiController::class);
Route::resource('item', ItemController::class);
