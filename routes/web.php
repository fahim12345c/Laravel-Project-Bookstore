<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bookcontroller;

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

Route::get('/books', [bookcontroller::class,'index'])->name('books.index');
Route::get('/books/{bookId}/show', [bookcontroller::class,'show'])->name('books.show');
Route::get('/books/create',[bookcontroller::class,'create'])->name('books.create');
Route::post('books/',[bookcontroller::class,'store'])->name('books.store');
Route::get('/books/{bookId}/edit', [bookcontroller::class,'edit'])->name('books.edit');
Route::post('/books/update',[bookcontroller::class,'update'])->name('books.update');
Route::post('/books', [bookcontroller::class,'destroy'])->name('books.destroy');
