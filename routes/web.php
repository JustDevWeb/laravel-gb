<?php

use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\IndexController as AdminController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\NewsRequestController;
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

//news
Route::group(["prefix" => "admin", "as" => "admin."], static function () {
    Route::get('/', AdminController::class)->name('index');
    Route::resource("/categories", AdminCategoryController::class);
    Route::resource("/news", AdminNewsController::class);
});

Route::get('/', [NewsController::class, "index"]);
Route::get('/news', [NewsController::class, "index"])->name("news.index");
Route::get('/news/{id}', [NewsController::class, "show"])
    ->where("id", "\d+")
    ->name("news.show");

Route::get('/news/request',[NewsRequestController::class, "index"])->name('news.request');
Route::POST('/news/request',[NewsRequestController::class, "store"])->name('news.request.store');

Route::get('/category', [CategoryController::class, "index"])->name("category.index");
Route::get('/category/{categoryName}', [CategoryController::class, "show"])->name("category.show");


