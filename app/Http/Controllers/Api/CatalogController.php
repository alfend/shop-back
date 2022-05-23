<?php

namespace App\Http\Controllers\Api;

use App\Catalog;
use App\Http\Requests\CatalogRequest;
use App\Http\Resources\CatalogResource;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CatalogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return CatalogResource::collection(Catalog::all());
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
     * @param CatalogRequest $request
     * @return CatalogResource
     */
    public function store(CatalogRequest $request)
    {
        $catalog = new Catalog();

        $catalog->fill($request->all());
        $catalog->save();

        return new CatalogResource($catalog);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return CatalogResource
     */
    public function show($id)
    {
        return new CatalogResource(Catalog::findOrFail($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return void
     */
    public function edit($id)
    {
        abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  CatalogRequest $request
     * @param  int $id
     * @return CatalogResource
     */
    public function update(CatalogRequest $request, $id)
    {
        $catalog = Catalog::findOrFail($id);

        $catalog->fill($request->all());
        $catalog->save();

        return new CatalogResource($catalog);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Catalog::destroy($id);

        return response()->json([
            'message' => 'Catalog deleted'
        ]);
    }
}
