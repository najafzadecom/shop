<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Http\Requests\StoreDistrictRequest;
use App\Http\Requests\UpdateDistrictRequest;

class DistrictController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:district-list|district-create|district-edit|district-delete', ['only' => ['index','store']]);
        $this->middleware('permission:district-create', ['only' => ['create','store']]);
        $this->middleware('permission:district-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:district-delete', ['only' => ['destroy']]);
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
     * @param  \App\Http\Requests\StoreDistrictRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StoreDistrictRequest $request)
    {
        $district = District::create($request->all());

        if($district) {
            return response()->json(['success' => true, 'data' => $district]);
        }

        return response()->json(['success' => false]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\District  $district
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(District $district): \Illuminate\Http\JsonResponse
    {
        return response()->json(['success' => true, 'data' => $district]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\District  $district
     * @return \Illuminate\Http\Response
     */
    public function edit(District $district)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDistrictRequest  $request
     * @param  \App\Models\District  $district
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateDistrictRequest $request, District $district): \Illuminate\Http\JsonResponse
    {
        $update = $district->update($request->all());

        if($update) {
            return response()->json(['success' => true, 'data' => $district]);
        }

        return response()->json(['success' => false]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\District  $district
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(District $district): \Illuminate\Http\JsonResponse
    {
        $delete = $district->delete();
        if($delete) {
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false]);
    }
}
