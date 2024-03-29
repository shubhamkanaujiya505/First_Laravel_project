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
Route::prefix('page')->group(function(){

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
});

// for Error show when page is not found
Route::fallback(function(){
    return "<h1>Page not found</h1>";
});
