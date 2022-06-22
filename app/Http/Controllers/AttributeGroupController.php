<?php

namespace App\Http\Controllers;

use App\Models\AttributeGroup;
use App\Http\Requests\StoreAttributeGroupRequest;
use App\Http\Requests\UpdateAttributeGroupRequest;

class AttributeGroupController extends Controller
{
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
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAttributeGroupRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AttributeGroup  $attributeGroup
     * @return \Illuminate\Http\Response
     */
    public function show(AttributeGroup $attributeGroup)
    {
        //
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
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAttributeGroupRequest $request, AttributeGroup $attributeGroup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AttributeGroup  $attributeGroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(AttributeGroup $attributeGroup)
    {
        //
    }
}
