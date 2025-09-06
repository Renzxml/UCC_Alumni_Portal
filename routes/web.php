<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;


Route::get('/', function () {return view('welcome');});
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::view('/profile','profile')->name('profile'); // or controller
Route::view('/settings','settings')->name('settings');