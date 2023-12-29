<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ArtikelController;

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

// Routes Login Admin
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/loginuser', [LoginController::class, 'loginuser'])->name('loginuser');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Routes Artikel
Route::get('/admin', [ArtikelController::class, 'admin'])->name('admin');
Route::get('/add', [ArtikelController::class, 'tambahArtikel'])->name('add');
Route::post('/simpanartikel', [ArtikelController::class, 'simpanArtikel'])->name('simpanartikel');
Route::get('/delete-article/{id}', [ArtikelController::class, 'delete'])->name('delete-article');
Route::get('/detail/{id}', [ArtikelController::class, 'detail'])->name('detail');
Route::get('/', [ArtikelController::class, 'artikel']);
Route::get('/edit/{id}', [ArtikelController::class, 'tampilkanartikel'])->name('edit');
Route::post('/updateartikel/{id}', [ArtikelController::class, 'updateartikel'])->name('updateartikel');