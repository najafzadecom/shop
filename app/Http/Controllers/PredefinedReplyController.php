<?php

namespace App\Http\Controllers;

use App\Models\PredefinedReply;
use App\Http\Requests\StorePredefinedReplyRequest;
use App\Http\Requests\UpdatePredefinedReplyRequest;

class PredefinedReplyController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:predefinedReply-list|predefinedReply-create|predefinedReply-edit|predefinedReply-delete', ['only' => ['index','store']]);
        $this->middleware('permission:predefinedReply-create', ['only' => ['create','store']]);
        $this->middleware('permission:predefinedReply-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:predefinedReply-delete', ['only' => ['destroy']]);
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
     * @param  \App\Http\Requests\StorePredefinedReplyRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StorePredefinedReplyRequest $request): \Illuminate\Http\JsonResponse
    {
        $predefinedReply = PredefinedReply::create($request->all());

        if($predefinedReply) {
            return response()->json(['success' => true, 'data' => $predefinedReply]);
        }

        return response()->json(['success' => false]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PredefinedReply  $predefinedReply
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(PredefinedReply $predefinedReply): \Illuminate\Http\JsonResponse
    {
        return response()->json(['success' => true, 'data' => $predefinedReply]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PredefinedReply  $predefinedReply
     * @return \Illuminate\Http\Response
     */
    public function edit(PredefinedReply $predefinedReply)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePredefinedReplyRequest  $request
     * @param  \App\Models\PredefinedReply  $predefinedReply
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdatePredefinedReplyRequest $request, PredefinedReply $predefinedReply): \Illuminate\Http\JsonResponse
    {
        $update = $predefinedReply->update($request->all());

        if($update) {
            return response()->json(['success' => true, 'data' => $predefinedReply]);
        }

        return response()->json(['success' => false]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PredefinedReply  $predefinedReply
     * @return \Illuminate\Http\Response
     */
    public function destroy(PredefinedReply $predefinedReply): \Illuminate\Http\JsonResponse
    {
        $delete = $predefinedReply->delete();
        if($delete) {
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false]);
    }
}
