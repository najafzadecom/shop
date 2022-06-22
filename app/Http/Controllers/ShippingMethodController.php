<?php

namespace App\Http\Controllers;

use App\Models\ShippingMethod;
use App\Http\Requests\StoreShippingMethodRequest;
use App\Http\Requests\UpdateShippingMethodRequest;

class ShippingMethodController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:shippingMethod-list|shippingMethod-create|shippingMethod-edit|shippingMethod-delete', ['only' => ['index','store']]);
        $this->middleware('permission:shippingMethod-create', ['only' => ['create','store']]);
        $this->middleware('permission:shippingMethod-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:shippingMethod-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreShippingMethodRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StoreShippingMethodRequest $request): \Illuminate\Http\JsonResponse
    {
        $shippingMethod = ShippingMethod::create($request->all());

        if($shippingMethod) {
            return response()->json(['success' => true, 'data' => $shippingMethod]);
        }

        return response()->json(['success' => false]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ShippingMethod  $shippingMethod
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(ShippingMethod $shippingMethod): \Illuminate\Http\JsonResponse
    {
        return response()->json(['success' => true, 'data' => $shippingMethod]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ShippingMethod  $shippingMethod
     * @return \Illuminate\Http\Response
     */
    public function edit(ShippingMethod $shippingMethod)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateShippingMethodRequest  $request
     * @param  \App\Models\ShippingMethod  $shippingMethod
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateShippingMethodRequest $request, ShippingMethod $shippingMethod): \Illuminate\Http\JsonResponse
    {
        $update = $shippingMethod->update($request->all());

        if($update) {
            return response()->json(['success' => true, 'data' => $shippingMethod]);
        }

        return response()->json(['success' => false]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ShippingMethod  $shippingMethod
     * @return \Illuminate\Http\Response
     */
    public function destroy(ShippingMethod $shippingMethod): \Illuminate\Http\JsonResponse
    {
        $delete = $shippingMethod->delete();
        if($delete) {
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false]);
    }
}
