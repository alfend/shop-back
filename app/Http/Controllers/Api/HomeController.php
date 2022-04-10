<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\HomeResource;
use App\Models\Home;
use App\Models\Products;


class HomeController extends Controller
{

    /**
     * @apiResource App\Http\Resources\HomeResource
     * @apiResourceModel App\Models\Home
     * @urlParam home int required Home's
     */
    public function index()
    {
        $home = Home::where('id', 1)->first();
        $banner = json_decode($home->banner);
        for ($i = 0; $i < count($banner); $i++) {
            $banner[$i] = 'storage/' . $banner[$i];
        }
        $home->slider = $banner;
        $home->products = Products::where('on_main', true)->get();;
        return $home;
    }
}
