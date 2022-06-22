<?php

namespace App\Http\Controllers;

use App\Models\AttributeGroup;
use App\Http\Requests\StoreAttributeGroupRequest;
use App\Http\Requests\UpdateAttributeGroupRequest;

class AttributeGroupController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:attributeGroup-list|attributeGroup-create|attributeGroup-edit|attributeGroup-delete', ['only' => ['index','store']]);
        $this->middleware('permission:attributeGroup-create', ['only' => ['create','store']]);
        $this->middleware('permission:attributeGroup-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:attributeGroup-delete', ['only' => ['destroy']]);
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
     * @param  \App\Http\Requests\StoreAttributeGroupRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StoreAttributeGroupRequest $request): \Illuminate\Http\JsonResponse
    {
        $attributeGroup = AttributeGroup::create($request->all());

        if($attributeGroup) {
            return response()->json(['success' => true, 'data' => $attributeGroup]);
        }

        return response()->json(['success' => false]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AttributeGroup  $attributeGroup
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(AttributeGroup $attributeGroup): \Illuminate\Http\JsonResponse
    {
        return response()->json(['success' => true, 'data' => $attributeGroup]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AttributeGroup  $attributeGroup
     * @return \Illuminate\Http\Response
     */
    public function edit(AttributeGroup $attributeGroup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAttributeGroupRequest  $request
     * @param  \App\Models\AttributeGroup  $attributeGroup
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateAttributeGroupRequest $request, AttributeGroup $attributeGroup): \Illuminate\Http\JsonResponse
    {
        $update = $attributeGroup->update($request->all());

        if($update) {
            return response()->json(['success' => true, 'data' => $attributeGroup]);
        }

        return response()->json(['success' => false]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AttributeGroup  $attributeGroup
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(AttributeGroup $attributeGroup): \Illuminate\Http\JsonResponse
    {
        $delete = $attributeGroup->delete();
        if($delete) {
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false]);
    }
}
