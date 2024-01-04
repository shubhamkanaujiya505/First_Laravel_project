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

Route::get('/homes/home', function () {
    return view('home');
})->name('home');

Route::get('/abouts/about', function () {
    return view('about');
})->name('about');

Route::get('/groups/group', function () {
    return view('group');
})->name('group');

Route::get('/contacts/contact', function () {
    return view('contact');
})->name('contact');

// For redirect url
// 301 for permanent redirection
// 302 for temporary redirection
Route::redirect('/contact','/contacts/contact', 301);