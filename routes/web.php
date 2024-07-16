<?php

use App\Http\Controllers\BookController;
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

Route::get('/', [BookController::class, 'index'])->name('books.index');
Route::get('/books/create', [BookController::class, 'create'])->name('books.create');
Route::post('/books/store', [BookController::class, 'store'])->name('books.store');
Route::get('/edit/{id}', [BookController::class, 'edit'])->name('books.edit');
Route::put('/edit/{id}', [BookController::class, 'update'])->name('books.update');
Route::delete('/delete/{id}', [BookController::class, 'destroy'])->name('books.destroy');

