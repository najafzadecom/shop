<?php

namespace App\Http\Controllers;

use App\Models\Option;
use App\Http\Requests\StoreOptionRequest;
use App\Http\Requests\UpdateOptionRequest;

class OptionController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:option-list|option-create|option-edit|option-delete', ['only' => ['index','store']]);
        $this->middleware('permission:option-create', ['only' => ['create','store']]);
        $this->middleware('permission:option-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:option-delete', ['only' => ['destroy']]);
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
     * @param  \App\Http\Requests\StoreOptionRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StoreOptionRequest $request)
    {
        $option = Option::create($request->all());

        if($option) {
            return response()->json(['success' => true, 'data' => $option]);
        }

        return response()->json(['success' => false]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Option  $option
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Option $option): \Illuminate\Http\JsonResponse
    {
        return response()->json(['success' => true, 'data' => $option]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Option  $option
     * @return \Illuminate\Http\Response
     */
    public function edit(Option $option)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOptionRequest  $request
     * @param  \App\Models\Option  $option
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateOptionRequest $request, Option $option): \Illuminate\Http\JsonResponse
    {
        $update = $option->update($request->all());

        if($update) {
            return response()->json(['success' => true, 'data' => $option]);
        }

        return response()->json(['success' => false]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Option  $option
     * @return \Illuminate\Http\Response
     */
    public function destroy(Option $option): \Illuminate\Http\JsonResponse
    {
        $delete = $option->delete();
        if($delete) {
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false]);
    }
}
