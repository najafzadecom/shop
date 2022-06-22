<?php

namespace App\Http\Controllers;

use App\Models\Attribute;
use App\Http\Requests\StoreAttributeRequest;
use App\Http\Requests\UpdateAttributeRequest;

class AttributeController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:attribute-list|attribute-create|attribute-edit|attribute-delete', ['only' => ['index','store']]);
        $this->middleware('permission:attribute-create', ['only' => ['create','store']]);
        $this->middleware('permission:attribute-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:attribute-delete', ['only' => ['destroy']]);
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
     * @param  \App\Http\Requests\StoreAttributeRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StoreAttributeRequest $request): \Illuminate\Http\JsonResponse
    {
        $attribute = Attribute::create($request->all());

        if($attribute) {
            return response()->json(['success' => true, 'data' => $attribute]);
        }

        return response()->json(['success' => false]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Attribute  $attribute
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Attribute $attribute): \Illuminate\Http\JsonResponse
    {
        return response()->json(['success' => true, 'data' => $attribute]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Attribute  $attribute
     * @return \Illuminate\Http\Response
     */
    public function edit(Attribute $attribute)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAttributeRequest  $request
     * @param  \App\Models\Attribute  $attribute
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateAttributeRequest $request, Attribute $attribute): \Illuminate\Http\JsonResponse
    {
        $update = $attribute->update($request->all());

        if($update) {
            return response()->json(['success' => true, 'data' => $attribute]);
        }

        return response()->json(['success' => false]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Attribute  $attribute
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Attribute $attribute): \Illuminate\Http\JsonResponse
    {
        $delete = $attribute->delete();
        if($delete) {
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false]);
    }
}
