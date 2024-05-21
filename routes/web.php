<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/about-us', function () {
    return view('about-us');
})->name('about');
Route::get('/mission', function () {
    return view('mission');
})->name('mission');
Route::get('/sponsor', function () {
    return view('sponsor');
})->name('sponsor');
Route::get('/donation', function () {
    return view('donation');
})->name('donation');
