<?php
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PermissionController;
use App\Models\User;

// Book routes
Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::get('/books/create', [BookController::class, 'create'])->name('books.create');
Route::get('/books/{id}/edit', [BookController::class, 'edit'])->name('books.edit');
Route::post('/books', [BookController::class, 'store'])->name('books.store');
Route::put('/books/{id}', [BookController::class, 'update'])->name('books.update');
Route::delete('/books/{id}', [BookController::class, 'destroy'])->name('books.destroy');

// Home route
Route::get('/', [HomeController::class, 'index'])->name('home');

// Login routes
Route::controller(LoginController::class)->group(function(){
    Route::get('/login', 'index')->name('login.index');
    Route::post('/login', 'store')->name('login.store');
    Route::get('/logout', 'destroy')->name('login.destroy');
    Route::get('/register', 'create')->name('login.register');
    Route::get('/dashboard', 'index')->name('login.dashboard');
});


