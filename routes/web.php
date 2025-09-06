<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavbarController;


Route::get('/', [NavbarController::class, 'index'])->name('welcome');


Route::view('/profile','profile')->name('profile');
Route::view('/settings','settings')->name('settings');

Route::get('/home', function () {return view('home');})->name('home');
Route::get('/careers', function () {return view('careers');})->name('careers');
Route::get('/online_services', function () {return view('online_services');})->name('online_services');
Route::get('/events', function () {return view('events');})->name('events');
Route::get('/about', function () {return view('about');})->name('about');
Route::get('/community', function () {return view('community');})->name('community');
Route::get('/login', function () {return view('login');})->name('login');

