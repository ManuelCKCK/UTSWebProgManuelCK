<?php

use App\Http\Controllers\BookCategoryController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\PublishersController;
use App\Models\BookCategory;
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


Route::get('/', [BooksController::class, 'index'])->name('home');
Route::get('/bookDetail/{id}', [BooksController::class, 'bookdetail'])->name('bookdetail');
Route::get('/Category/{id}', [BookCategoryController::class, 'category'])->name('category');
// Route::get('/Category/{id}', [BookCategoryController::class, 'Fantasy'])->name('Fantasy');
// Route::get('/Category/FamilySaga', [BookCategoryController::class, 'FamilySaga'])->name('FamilySaga');

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/publisher/{id}', [PublishersController::class, 'publisher'])->name('publisher');

