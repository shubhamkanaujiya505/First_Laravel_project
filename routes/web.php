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
Route::get('/about/{id}/comment/{commentid}', function (string $id, string $comment) {
    if($id !=null){
    return "<h1> post id:".$id."</h1><h1> post id:".$comment."</h1>";
    }else{
    return "<h1> No id found </h1>";
    }
})->whereNumber('id')->whereAlpha('$commentid');

// Laravel Route Constraints
// http://localhost/post/10 ----> whereNumber('id');
// http://localhost/post/hai ----> whereAlpha('Name');
// http://localhost/post/hia10 ----> whereAlphaNumeric('name');
// http://localhost/post/song ----> whereIn('category',['movie','song'])
// http://localhost/post/@10 ----> where('id','[@0-9]+'); regular expression



// Route::view('about', '/about');

Route::get('/group', function () {
    return view('group');
});
Route::get('/contact', function () {
    return view('contact');
});
