<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\ProductCategoryController;
use App\Http\Controllers\Api\HomeController;

Route::group(['middleware' => 'api',], function () {
    Route::get('/products', [ProductController::class, 'index']);
    Route::get('/product/{id}', [ProductController::class, 'show']);
    Route::get('/product-categories/{id}', [ProductController::class, 'byCategory']);
    Route::get('/categories', [ProductCategoryController::class, 'index']);
    Route::get('/home', [HomeController::class, 'index']);

    Route::apiResource('clients', ClientController::class);
    Route::post('registration', [ClientController::class, 'registration']);
    Route::get('login', [ClientController::class, 'login']);
});
