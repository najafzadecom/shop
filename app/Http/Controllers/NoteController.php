<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Http\Requests\StoreNoteRequest;
use App\Http\Requests\UpdateNoteRequest;

class NoteController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:note-list|note-create|note-edit|note-delete', ['only' => ['index','store']]);
        $this->middleware('permission:note-create', ['only' => ['create','store']]);
        $this->middleware('permission:note-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:note-delete', ['only' => ['destroy']]);
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
     * @param  \App\Http\Requests\StoreNoteRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StoreNoteRequest $request): \Illuminate\Http\JsonResponse
    {
        $note = Note::create($request->all());

        if($note) {
            return response()->json(['success' => true, 'data' => $note]);
        }

        return response()->json(['success' => false]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Note  $note
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Note $note): \Illuminate\Http\JsonResponse
    {
        return response()->json(['success' => true, 'data' => $note]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function edit(Note $note)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNoteRequest  $request
     * @param  \App\Models\Note  $note
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateNoteRequest $request, Note $note): \Illuminate\Http\JsonResponse
    {
        $update = $note->update($request->all());

        if($update) {
            return response()->json(['success' => true, 'data' => $note]);
        }

        return response()->json(['success' => false]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function destroy(Note $note): \Illuminate\Http\JsonResponse
    {
        $delete = $note->delete();
        if($delete) {
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false]);
    }
}
