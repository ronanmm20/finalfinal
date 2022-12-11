<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::view('/', 'Welcome');
Route::view('/clients', 'clients');
Route::view('/about', 'about');
Route::view('/contact', 'contact');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [\App\Http\Controllers\ProductsController::class, 'index'])->name('dashboard');
Route::get('/adminmenu', [\App\Http\Controllers\ProductsController::class, 'admin'])->name('adminmenu');
Route::get('/createproduct', [\App\Http\Controllers\ProductsController::class, 'create'])->name('createproduct');
Route::post('/createproduct', [\App\Http\Controllers\ProductsController::class, 'store'])->name('storeproduct');
Route::get('/viewproduct/{products}', [\App\Http\Controllers\ProductsController::class, 'show'])->name('viewproduct');
Route::get('/deleteproduct/{products}', [\App\Http\Controllers\ProductsController::class, 'destroy'])->name('deleteproduct');
Route::get('/editproduct/{products}', [\App\Http\Controllers\ProductsController::class, 'edit'])->name('editproduct');
Route::post('/updateproduct/{products}', [\App\Http\Controllers\ProductsController::class, 'update'])->name('updateproduct');

