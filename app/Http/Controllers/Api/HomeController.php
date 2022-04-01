<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\HomeResource;
use App\Models\Home;


class HomeController extends Controller
{

    /**
     * @apiResource App\Http\Resources\HomeResource
     * @apiResourceModel App\Models\Home
     * @urlParam home int required Home's
     */
    public function index()
    {
        return Home::where('id', 1)->first();
    }
}
