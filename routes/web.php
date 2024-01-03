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

Route::get('/home', function () {
    return view('home   ');
});
Route::get('/about/{id?}', function (string $id=null) {
    if($id !=null){
    return "<h1> post id:".$id."</h1>";
    }else{
    return "<h1> No id found </h1>";
    }
});
// Route::view('about', '/about');

Route::get('/group', function () {
    return view('group');
});
Route::get('/contact', function () {
    return view('contact');
});
