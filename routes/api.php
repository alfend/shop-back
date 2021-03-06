<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\ProductCategoryController;
use App\Http\Controllers\Api\HomeController;
Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function () {
    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
});

Route::group(['middleware' => 'api',], function () {
    Route::get('/products', [ProductController::class, 'index']);
    Route::get('/product/{id}', [ProductController::class, 'show']);
    Route::get('/product-categories/{id}', [ProductController::class, 'byCategory']);
    Route::get('/categories', [ProductCategoryController::class, 'index']);
    Route::get('/home', [HomeController::class, 'index']);
    Route::resource('catalogs', 'Api\CatalogController');
    Route::get('banners', 'Api\BannerController@imageBanners');
    Route::get('banners-v2', 'Api\BannerController@bannersMobile');
});
