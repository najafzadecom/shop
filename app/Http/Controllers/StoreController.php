<?php

namespace App\Http\Controllers;

use App\Models\Store;
use App\Http\Requests\StoreStoreRequest;
use App\Http\Requests\UpdateStoreRequest;

class StoreController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:store-list|store-create|store-edit|store-delete', ['only' => ['index','store']]);
        $this->middleware('permission:store-create', ['only' => ['create','store']]);
        $this->middleware('permission:store-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:store-delete', ['only' => ['destroy']]);
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
     * @param  \App\Http\Requests\StoreStoreRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StoreStoreRequest $request): \Illuminate\Http\JsonResponse
    {
        $store = Store::create($request->all());

        if($store) {
            return response()->json(['success' => true, 'data' => $store]);
        }

        return response()->json(['success' => false]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Store $store): \Illuminate\Http\JsonResponse
    {
        return response()->json(['success' => true, 'data' => $store]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function edit(Store $store)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStoreRequest  $request
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateStoreRequest $request, Store $store): \Illuminate\Http\JsonResponse
    {
        $update = $store->update($request->all());

        if($update) {
            return response()->json(['success' => true, 'data' => $store]);
        }

        return response()->json(['success' => false]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function destroy(Store $store): \Illuminate\Http\JsonResponse
    {
        $delete = $store->delete();
        if($delete) {
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false]);
    }
}
