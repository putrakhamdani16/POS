<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home']);
Route::get('/penjualan', [PenjualanController::class, 'penjualan']);
Route::get('/user/{id}/name/{name}', [UserController::class, 'user']);

Route::prefix('category')->group(function(){
    Route::get('/food-beverage', [ProductsController::class, 'food']);
    Route::get('/beauty-health', [ProductsController::class, 'beauty']);
    Route::get('/home-care', [ProductsController::class, 'homecare']);
    Route::get('/baby-kid', [ProductsController::class, 'baby']);
});
