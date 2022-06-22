<?php

namespace App\Http\Controllers;

use App\Models\OrderStatus;
use App\Http\Requests\StoreOrderStatusRequest;
use App\Http\Requests\UpdateOrderStatusRequest;

class OrderStatusController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:orderStatus-list|orderStatus-create|orderStatus-edit|orderStatus-delete', ['only' => ['index','store']]);
        $this->middleware('permission:orderStatus-create', ['only' => ['create','store']]);
        $this->middleware('permission:orderStatus-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:orderStatus-delete', ['only' => ['destroy']]);
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
     * @param  \App\Http\Requests\StoreOrderStatusRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StoreOrderStatusRequest $request): \Illuminate\Http\JsonResponse
    {
        $orderStatus = OrderStatus::create($request->all());

        if($orderStatus) {
            return response()->json(['success' => true, 'data' => $orderStatus]);
        }

        return response()->json(['success' => false]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OrderStatus  $orderStatus
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(OrderStatus $orderStatus): \Illuminate\Http\JsonResponse
    {
        return response()->json(['success' => true, 'data' => $orderStatus]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OrderStatus  $orderStatus
     * @return \Illuminate\Http\Response
     */
    public function edit(OrderStatus $orderStatus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOrderStatusRequest  $request
     * @param  \App\Models\OrderStatus  $orderStatus
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateOrderStatusRequest $request, OrderStatus $orderStatus): \Illuminate\Http\JsonResponse
    {
        $update = $orderStatus->update($request->all());

        if($update) {
            return response()->json(['success' => true, 'data' => $orderStatus]);
        }

        return response()->json(['success' => false]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OrderStatus  $orderStatus
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrderStatus $orderStatus): \Illuminate\Http\JsonResponse
    {
        $delete = $orderStatus->delete();
        if($delete) {
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false]);
    }
}
