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
use Illuminate\Support\Str;

Route::get('/', function () {
    return view('welcome');
});

Route::get('postcards', function () {
    PostCard::hello('Hello Laravel 6', 'foo@bar.com');
});

Route::get('/macro', function () {
    dump(Str::partNumber('1234567890'));
    dump(Str::prefix('1234567890'));
});

Route::get('/errorJson', function () {
    return Response::errorJson();
});
