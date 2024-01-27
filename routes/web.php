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

Route::get('/', [App\Http\Controllers\Bookcontroller::class, 'welcome']);
Route::get('/books', [App\Http\Controllers\Bookcontroller::class, 'index'])->name('books.index');
Route::get('/books/{bookId}/show', [App\Http\Controllers\Bookcontroller::class, 'show'])->name('books.show');
Route::get('/books/create', [App\Http\Controllers\Bookcontroller::class, 'create'])->name('books.create');
Route::post('/books', [App\Http\Controllers\Bookcontroller::class, 'store'])->name('books.store');
Route::get('/books/{bookId}/edit', [App\Http\Controllers\Bookcontroller::class, 'edit'])->name('books.edit');
Route::post('/books/update', [App\Http\Controllers\Bookcontroller::class, 'update'])->name('books.update');
Route::post('/books/delet', [App\Http\Controllers\Bookcontroller::class, 'destroy'])->name('books.destroy');
