<?php

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
   Route::resource('products','ProductController');
Route::get('/', function () {
Route::resource('products','ProductController');
    return view('welcome');
 Route::resource('products','ProductController');
});
