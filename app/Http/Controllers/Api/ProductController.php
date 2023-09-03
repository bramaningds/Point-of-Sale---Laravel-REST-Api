<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Controllers\Base\ProductController as BaseProductController;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Http\Resources\ProductResource;

class ProductController extends BaseProductController
{

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return ProductResource::collection(parent::index($request));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        return ProductResource::make(parent::store($request));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return ProductResource::make(parent::show($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, $id)
    {
        return ProductResource::make(parent::update($request, $id));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        return parent::destroy($id) ? response('', 204) : response('', 500);
    }
}
