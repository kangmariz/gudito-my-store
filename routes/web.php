<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

Route::get('/',[CategoriesController::class, 'index']);
Route::get('/products',[ProductsController::class, 'index']);
Route::get('/products/{category}',[ProductsController::class, 'index']);
