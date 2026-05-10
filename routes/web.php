<?php

use Illuminate\Support\Facades\Route;

// Web Routes
Route::get('/', function () {
    return view('pages.home');
})->name('home');

// Route::get('/about', function () {
//     return view('about');
// })->name('about');

// Route::get('/contact', function () {
//     return view('contact');
// })->name('contact');
