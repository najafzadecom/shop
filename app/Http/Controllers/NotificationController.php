<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use App\Http\Requests\StoreNotificationRequest;
use App\Http\Requests\UpdateNotificationRequest;

class NotificationController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:notification-list|notification-create|notification-edit|notification-delete', ['only' => ['index','store']]);
        $this->middleware('permission:notification-create', ['only' => ['create','store']]);
        $this->middleware('permission:notification-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:notification-delete', ['only' => ['destroy']]);
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
     * @param  \App\Http\Requests\StoreNotificationRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StoreNotificationRequest $request): \Illuminate\Http\JsonResponse
    {
        $notification = Notification::create($request->all());

        if($notification) {
            return response()->json(['success' => true, 'data' => $notification]);
        }

        return response()->json(['success' => false]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Notification  $notification
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Notification $notification): \Illuminate\Http\JsonResponse
    {
        return response()->json(['success' => true, 'data' => $notification]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function edit(Notification $notification)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNotificationRequest  $request
     * @param  \App\Models\Notification  $notification
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateNotificationRequest $request, Notification $notification): \Illuminate\Http\JsonResponse
    {
        $update = $notification->update($request->all());

        if($update) {
            return response()->json(['success' => true, 'data' => $notification]);
        }

        return response()->json(['success' => false]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function destroy(Notification $notification): \Illuminate\Http\JsonResponse
    {
        $delete = $notification->delete();
        if($delete) {
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false]);
    }
}
