<?php
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\PermissionController;
use App\Models\User;

// Book routes
Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::get('/books/create', [BookController::class, 'create'])->name('books.create');
Route::get('/books/{id}/edit', [BookController::class, 'edit'])->name('books.edit');
Route::post('/books', [BookController::class, 'store'])->name('books.store');
Route::put('/books/{id}', [BookController::class, 'update'])->name('books.update');
Route::delete('/books/{id}', [BookController::class, 'destroy'])->name('books.destroy');
Route::get('/dashboard', [BookController::class, 'dashboard'])->name('books.dashboard');
// Home route
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/map', [HomeController::class, 'map'])->name('map');

Route::controller(ContatoController::class)->group(function(){
    Route::get('/contato', 'index')->name('contato.create');
    Route::post('/contato', 'store')->name('contato.register');
});

// routes/web.php


Route::get('/items', [ItemController::class, 'index']);
Route::post('/calculate-total', [ItemController::class, 'calculateTotal']);

// Login routes
Route::controller(LoginController::class)->group(function(){
    Route::get('/', 'index')->name('login.index');
    Route::post('/', 'store')->name('login.store');
    Route::get('/logout', 'destroy')->name('login.destroy');
    Route::get('/register', 'create')->name('login.create');
    Route::post('/register', 'register')->name('login.register');
});


