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

Route::get('/welcome', function () {
    return "<h1>Welcome to blog</h1>";
});

Route::get('/about', function () {
    return "<h1>About the project</h1>";
});

Route::get('/news', function () {
    return "<h1>Our news</h1>";
});

