<?php

use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\AuthController;
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

// User Routes
Route::middleware(['auth'])->group(function () {
    Route::get('user', [UserController::class, 'index'])->name('user');
    Route::get('order', [ReservasiController::class, 'create'])->name('order.create');
    Route::get('history', [ReservasiController::class, 'userIndex'])->name('order.index');
    Route::resource('reservasi', ReservasiController::class);
});

// Admin Routes
Route::get('admin', function () {
    return view('auth_page.login_admin');
});

Route::get('admin_pesanan', [ReservasiController::class, 'adminIndex'])->name('admin.index');

Route::get('admin_item', [ItemController::class, 'index'])->name('admin.index1');

// Controller
Route::resource('reservasi', ReservasiController::class);
Route::resource('item', ItemController::class);

// Authentication
Route::get('sesi', [AuthController::class, 'index'])->name('auth');
Route::post('sesi', [AuthController::class, 'login']);
Route::get('login', function () {
    return redirect()->route('auth');
})->name('login');
Route::get('reg', [AuthController::class, 'create'])->name('registrasi');
Route::post('reg', [AuthController::class, 'register']);
Route::get('verify/{verify_key}', [AuthController::class, 'verify']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

//search bar
Route::get('item_search', [ItemController::class, 'search'])->name('item.search');
Route::get('reservasi_search', [ReservasiController::class, 'search'])->name('reservasi.search');
