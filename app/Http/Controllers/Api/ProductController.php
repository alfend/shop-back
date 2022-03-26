<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Http\Resources\ProductResource;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return ProductResource::collection(Products::all());
    }

    public function show($id)
    {
        return new ProductResource(Products::findOrFail($id));
    }

    public function byCategory($id)
    {
        return ProductResource::collection(Products::where('category_id', $id)->get());
    }
}
