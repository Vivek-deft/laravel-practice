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
    return view('welcome');
});


// Route::view('/post','post');
// Route::get('/hello', function () {
//     return view('post');
// });

Route::get('/post/firstpost', function () {
    return view('firstpost');
})->name('first');


Route::get('/test', function () {
    return view('post');
})->name('post');


// // Redirect method
// Route::redirect('/post','/test');


// Page not found error sol
Route::fallback(function(){
    return "<h1>Page not found.</h1>";
});

// practicing git
Route ::get('/book', function(){
    return view('book');
})->name('book');