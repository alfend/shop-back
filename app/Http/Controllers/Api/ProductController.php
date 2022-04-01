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
        return Products::all();//ProductResource::collection(Products::all());
    }

    public function show($id)
    {
        return Products::findOrFail($id); //new ProductResource()
    }

    public function byCategory($id)
    {
        return Products::where('category_id', $id)->get(); //ProductResource::collection(
    }
}
