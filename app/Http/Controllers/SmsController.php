<?php

namespace App\Http\Controllers;

use App\Models\Sms;
use App\Http\Requests\StoreSmsRequest;
use App\Http\Requests\UpdateSmsRequest;

class SmsController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:sms-list|sms-create|sms-edit|sms-delete', ['only' => ['index','store']]);
        $this->middleware('permission:sms-create', ['only' => ['create','store']]);
        $this->middleware('permission:sms-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:sms-delete', ['only' => ['destroy']]);
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
     * @param  \App\Http\Requests\StoreSmsRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StoreSmsRequest $request): \Illuminate\Http\JsonResponse
    {
        $sms = Sms::create($request->all());

        if($sms) {
            return response()->json(['success' => true, 'data' => $sms]);
        }

        return response()->json(['success' => false]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sms  $sms
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Sms $sms): \Illuminate\Http\JsonResponse
    {
        return response()->json(['success' => true, 'data' => $sms]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sms  $sms
     * @return \Illuminate\Http\Response
     */
    public function edit(Sms $sms)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSmsRequest  $request
     * @param  \App\Models\Sms  $sms
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateSmsRequest $request, Sms $sms): \Illuminate\Http\JsonResponse
    {
        $update = $sms->update($request->all());

        if($update) {
            return response()->json(['success' => true, 'data' => $sms]);
        }

        return response()->json(['success' => false]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sms  $sms
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sms $sms): \Illuminate\Http\JsonResponse
    {
        $delete = $sms->delete();
        if($delete) {
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false]);
    }
}
