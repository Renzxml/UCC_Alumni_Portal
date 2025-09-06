<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavbarController;

// Public routes
Route::get('/', [NavbarController::class, 'index'])->name('welcome');

Route::view('/profile','profile')->name('profile');
Route::view('/settings','settings')->name('settings');

Route::get('/home', function () { return view('home'); })->name('home');
Route::get('/careers', function () { return view('careers'); })->name('careers');
Route::get('/online_services', function () { return view('online_services'); })->name('online_services');
Route::get('/events', function () { return view('events'); })->name('events');
Route::get('/about', function () { return view('about'); })->name('about');
Route::get('/community', function () { return view('community'); })->name('community');
Route::get('/login', function () { return view('login'); })->name('login');
Route::get('/register', function () { return view('register'); })->name('register');

// Admin routes
Route::prefix('admin')->group(function () {
    // Default /admin → dashboard
    Route::get('/', function() {return redirect()->route('dashboard');});

    Route::get('/dashboard', function () { return view('admin.dashboard'); })->name('dashboard');
    Route::get('/alumni', function () { return view('admin.alumni'); })->name('alumni');
    Route::get('/ID_request', function () { return view('admin.ID_request'); })->name('ID_request');
    Route::get('/community_management', function () { return view('admin.community_management'); })->name('community_management');
    Route::get('/analytics', function () { return view('admin.analytics'); })->name('analytics');
    Route::get('/admin_management', function () { return view('admin.admin_management'); })->name('admin_management');
    Route::get('/support_request', function () { return view('admin.support_request'); })->name('support_request');
});

// User routes
Route::prefix('user')->group(function () {
    // Default /user → home
    Route::get('/', function() {return redirect()->route('home');});

    Route::get('/home', function () { return view('user.home'); })->name('home');
    Route::get('/careers', function () { return view('user.careers'); })->name('careers');
    Route::get('/network', function () { return view('user.network'); })->name('network');
    Route::get('/messaging', function () { return view('user.messaging'); })->name('messaging');
    Route::get('/community', function () { return view('user.community'); })->name('community');
    Route::get('/profile', function () { return view('user.profile'); })->name('profile');
});
