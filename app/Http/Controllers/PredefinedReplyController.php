<?php

namespace App\Http\Controllers;

use App\Models\PredefinedReply;
use App\Http\Requests\StorePredefinedReplyRequest;
use App\Http\Requests\UpdatePredefinedReplyRequest;

class PredefinedReplyController extends Controller
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
     * @param  \App\Http\Requests\StorePredefinedReplyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePredefinedReplyRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PredefinedReply  $predefinedReply
     * @return \Illuminate\Http\Response
     */
    public function show(PredefinedReply $predefinedReply)
    {
        //
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
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePredefinedReplyRequest $request, PredefinedReply $predefinedReply)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PredefinedReply  $predefinedReply
     * @return \Illuminate\Http\Response
     */
    public function destroy(PredefinedReply $predefinedReply)
    {
        //
    }
}
