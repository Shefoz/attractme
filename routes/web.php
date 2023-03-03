<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/products', [App\Http\Controllers\ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [App\Http\Controllers\ProductController::class, 'create'])->name('products.create');
Route::post('/products/store', [App\Http\Controllers\ProductController::class, 'store'])->name('products.store');
Route::get('/products/edit/{id}', [App\Http\Controllers\ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/update/{id}', [App\Http\Controllers\ProductController::class, 'update'])->name('products.update');
Route::delete('/products/destroy/{id}', [App\Http\Controllers\ProductController::class, 'destroy'])->name('products.destroy');

Route::get('/categories', [App\Http\Controllers\CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/create', [App\Http\Controllers\CategoryController::class, 'create'])->name('categories.create');
Route::post('/categories/store', [App\Http\Controllers\CategoryController::class, 'store'])->name('categories.store');