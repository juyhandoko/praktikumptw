<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/index0308', function () {
    return view('index0308');
    
});
Route::get('/artikel0308', function () {
    return view('artikel0308');
    
});
Route::get('/contact0308', function () {
    return view('contact0308');
    
});

