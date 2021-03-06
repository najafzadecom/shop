<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Http\Requests\StoreMenuRequest;
use App\Http\Requests\UpdateMenuRequest;

class MenuController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:menu-list|menu-create|menu-edit|menu-delete', ['only' => ['index','store']]);
        $this->middleware('permission:menu-create', ['only' => ['create','store']]);
        $this->middleware('permission:menu-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:menu-delete', ['only' => ['destroy']]);
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
     * @param  \App\Http\Requests\StoreMenuRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StoreMenuRequest $request): \Illuminate\Http\JsonResponse
    {
        $menu = Menu::create($request->all());

        if($menu) {
            return response()->json(['success' => true, 'data' => $menu]);
        }

        return response()->json(['success' => false]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Menu $menu): \Illuminate\Http\JsonResponse
    {
        return response()->json(['success' => true, 'data' => $menu]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMenuRequest  $request
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateMenuRequest $request, Menu $menu): \Illuminate\Http\JsonResponse
    {
        $update = $menu->update($request->all());

        if($update) {
            return response()->json(['success' => true, 'data' => $menu]);
        }

        return response()->json(['success' => false]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu): \Illuminate\Http\JsonResponse
    {
        $delete = $menu->delete();
        if($delete) {
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false]);
    }
}
