<?php

namespace App\Http\Controllers;

use App\Models\NoteCategory;
use App\Http\Requests\StoreNoteCategoryRequest;
use App\Http\Requests\UpdateNoteCategoryRequest;

class NoteCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:noteCategory-list|noteCategory-create|noteCategory-edit|noteCategory-delete', ['only' => ['index','store']]);
        $this->middleware('permission:noteCategory-create', ['only' => ['create','store']]);
        $this->middleware('permission:noteCategory-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:noteCategory-delete', ['only' => ['destroy']]);
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
     * @param  \App\Http\Requests\StoreNoteCategoryRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StoreNoteCategoryRequest $request): \Illuminate\Http\JsonResponse
    {
        $noteCategory = NoteCategory::create($request->all());

        if($noteCategory) {
            return response()->json(['success' => true, 'data' => $noteCategory]);
        }

        return response()->json(['success' => false]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NoteCategory  $noteCategory
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(NoteCategory $noteCategory): \Illuminate\Http\JsonResponse
    {
        return response()->json(['success' => true, 'data' => $noteCategory]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NoteCategory  $noteCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(NoteCategory $noteCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNoteCategoryRequest  $request
     * @param  \App\Models\NoteCategory  $noteCategory
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateNoteCategoryRequest $request, NoteCategory $noteCategory): \Illuminate\Http\JsonResponse
    {
        $update = $noteCategory->update($request->all());

        if($update) {
            return response()->json(['success' => true, 'data' => $noteCategory]);
        }

        return response()->json(['success' => false]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NoteCategory  $noteCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(NoteCategory $noteCategory): \Illuminate\Http\JsonResponse
    {
        $delete = $noteCategory->delete();
        if($delete) {
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false]);
    }
}
