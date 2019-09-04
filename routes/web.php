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

use App\PostCard;

Route::get('/', function () {
    return view('welcome');
});

Route::get('postcards', function () {
    PostCard::hello('Hello Laravel 6', 'foo@bar.com');
});
