<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\BookController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BorrowBookController;
use App\Http\Controllers\CollectionController;


Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/books', [BookController::class, 'index'])->name('books');

    Route::get('/borrow', [BorrowBookController::class, 'create'])->name('borrow');
    Route::post('/borrow/book', [BorrowBookController::class, 'store'])->name('borrow_book');

    Route::get('/collection', [CollectionController::class, 'index'])->name('collection');

});

