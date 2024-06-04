<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/catalogo', [App\Http\Controllers\LivroController::class, 'index'])->name('catalogo');
Route::delete('/livro/{id}',  [App\Http\Controllers\LivroController::class, 'destroy']);
Route::get('/detalhes/{id}', [App\Http\Controllers\LivroController::class, 'detalhes'])->name('detalhes');


Route::get('/livro/editar/{id}', [App\Http\Controllers\LivroController::class, 'edit'])->name('livro.edit')->middleware('auth');
Route::put('/livro/update/{id}', [App\Http\Controllers\LivroController::class, 'update'])->name('livro.update');

Route::get('/contato', function () {
    return view('contato');
});

Route::get('/detalhes', function () {
    return view('detalhes');
});


Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index']);
});

Route::get('/dashbord', [App\Http\Controllers\LivroController::class, 'dashbord'])->middleware('auth');

Route::post('/livro', [App\Http\Controllers\LivroController::class, 'store'])->name('livro.store');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::middleware('auth')->group(function () {
    Route::get('/admin', [AdminController::class, 'index']);
});
