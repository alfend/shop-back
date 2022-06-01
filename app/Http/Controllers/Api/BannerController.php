<?php

namespace App\Http\Controllers\Api;

use App\Banner;
use App\Http\Controllers\Controller;
use App\Http\Requests\BannerRequest;
use App\Http\Resources\BannerResource;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return BannerResource::collection(Banner::all());
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function imageBanners()
    {
        return BannerResource::collection(Banner::where('type', 1)->get());
    }

    public function bannersMobile()
    {
        return BannerResource::collection(Banner::active()->currentBranch()->orderBy('order')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        abort(404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param BannerRequest $request
     * @return BannerResource | JsonResponse
     */
    public function store(BannerRequest $request)
    {
        $banner = new Banner($request->all());

        if ($banner->type == Banner::TYPE__PICTURE) {
            if (!$request->has('image')) {
                return response()->json([
                    'errors' => [
                        'image' => 'Необходимо загрузить изображение'
                    ]
                ], 400);
            }

            $banner->image_path = Banner::storeImage($request->image);

            if ($request->has('mobile_image')) {
                $banner->mobile_image_path = Banner::storeImage($request->mobile_image);
            }
        } elseif ($banner->type == Banner::TYPE__VIDEO) {
            if (!$request->has('video')) {
                return response()->json([
                    'errors' => [
                        'video' => 'Необходимо загрузить видео'
                    ]
                ], 400);
            }

            if ($request->has('gif')) {
                $banner->image_path = Banner::storeGifOrVideo($request, 'gif');
            }

            $banner->video_path = Banner::storeGifOrVideo($request, 'video');
        }

        if ($request->get('cities') !== null) {
            $banner->cities = array_map('intval', explode(',', $request->get('cities')));
        }


        $banner->save();

        return new BannerResource($banner);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return BannerResource
     */
    public function show(int $id)
    {
        if (!$banner = Banner::where('id', $id)->first()) {
            abort(404);
        }

        return new BannerResource($banner);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return void
     */
    public function edit($id)
    {
        abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param BannerRequest $request
     * @param int $id
     * @return BannerResource
     */
    public function update(BannerRequest $request, int $id)
    {
        $banner = Banner::findOrFail($id);

        $banner->fill($request->all());

        if ($banner->type == Banner::TYPE__PICTURE) {
            if ($request->has('image')) {
                $oldImage = $banner->image_path;
                $banner->image_path = Banner::storeImage($request->image);
                Storage::disk('public')->delete($oldImage);
            }

            if ($request->has('mobile_image')) {
                $oldMobileImage = $banner->mobile_image_path;
                $banner->mobile_image_path = Banner::storeImage($request->mobile_image);
                Storage::disk('public')->delete($oldMobileImage);
            }
        } elseif ($banner->type == Banner::TYPE__VIDEO) {
            if ($request->has('gif')) {
                $oldImage = $banner->image_path;
                $banner->image_path = Banner::storeGifOrVideo($request, 'gif');
                Storage::disk('public')->delete($oldImage);
            }

            if ($request->has('video')) {
                $oldVideo = $banner->image_path;
                $banner->video_path = Banner::storeGifOrVideo($request, 'video');
                Storage::disk('public')->delete($oldVideo);
            }
        }
        if ($request->get('cities') !== null) {
            $banner->cities = array_map('intval', explode(',', $request->get('cities')));
        }
        $banner->save();

        return new BannerResource($banner);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $banner = Banner::findOrFail($id);
        $banner->delete();

        return response()->json([
            'message' => 'Banner deleted'
        ]);
    }

    public function order(Request $request)
    {
        $request->validate([
            '*.id' => ['required', 'integer']
        ]);

        $res = DB::transaction(function () use ($request) {
            foreach ($request->input('*.id') as $index => $id) {
                Banner::where('id', $id)->update(['order' => $index + 1], ['timestamps' => false]);
            }
        });

        return $res;
    }
}

