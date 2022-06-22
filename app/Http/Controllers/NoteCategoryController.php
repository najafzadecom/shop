<?php

namespace App\Http\Controllers;

use App\Models\NoteCategory;
use App\Http\Requests\StoreNoteCategoryRequest;
use App\Http\Requests\UpdateNoteCategoryRequest;

class NoteCategoryController extends Controller
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
     * @param  \App\Http\Requests\StoreNoteCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNoteCategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NoteCategory  $noteCategory
     * @return \Illuminate\Http\Response
     */
    public function show(NoteCategory $noteCategory)
    {
        //
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
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNoteCategoryRequest $request, NoteCategory $noteCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NoteCategory  $noteCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(NoteCategory $noteCategory)
    {
        //
    }
}
