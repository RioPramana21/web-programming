<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\StaticPageController;
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

Route::get('/', function () {
    return redirect()->route('home');
});

Route::get('/homepage', [BookController::class, 'index'])->name('home');
Route::get('/book-detail/{id}', [BookController::class, 'show'])->name('get_book_detail');
Route::get('/categories/{id}', [CategoryController::class, 'show'])->name('get_category_detail');
Route::get('/publishers', [PublisherController::class, 'index'])->name('get_publishers');
Route::get('/publishers/{id}', [PublisherController::class, 'show'])->name('get_publisher_detail');
Route::get('/contact', [StaticPageController::class, 'index'])->name('contact');
