<?php

namespace App\Http\Controllers;

use App\Models\MenuItem;
use App\Http\Requests\StoreMenuItemRequest;
use App\Http\Requests\UpdateMenuItemRequest;

class MenuItemController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:menuItem-list|menuItem-create|menuItem-edit|menuItem-delete', ['only' => ['index','store']]);
        $this->middleware('permission:menuItem-create', ['only' => ['create','store']]);
        $this->middleware('permission:menuItem-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:menuItem-delete', ['only' => ['destroy']]);
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
     * @param  \App\Http\Requests\StoreMenuItemRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StoreMenuItemRequest $request): \Illuminate\Http\JsonResponse
    {
        $menuItem = MenuItem::create($request->all());

        if($menuItem) {
            return response()->json(['success' => true, 'data' => $menuItem]);
        }

        return response()->json(['success' => false]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MenuItem  $menuItem
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(MenuItem $menuItem): \Illuminate\Http\JsonResponse
    {
        return response()->json(['success' => true, 'data' => $menuItem]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MenuItem  $menuItem
     * @return \Illuminate\Http\Response
     */
    public function edit(MenuItem $menuItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMenuItemRequest  $request
     * @param  \App\Models\MenuItem  $menuItem
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateMenuItemRequest $request, MenuItem $menuItem): \Illuminate\Http\JsonResponse
    {
        $update = $menuItem->update($request->all());

        if($update) {
            return response()->json(['success' => true, 'data' => $menuItem]);
        }

        return response()->json(['success' => false]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MenuItem  $menuItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(MenuItem $menuItem): \Illuminate\Http\JsonResponse
    {
        $delete = $menuItem->delete();
        if($delete) {
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false]);
    }
}
