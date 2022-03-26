<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductCategoryRequest;
use App\Http\Resources\ProductCategoryResource;
use App\Models\ProductCategories;


class ProductCategoryController extends Controller
{
    public function index()
    {
        return ProductCategories::all(); //ProductCategoryResource::collection(
    }
}
