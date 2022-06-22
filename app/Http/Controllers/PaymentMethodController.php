<?php

namespace App\Http\Controllers;

use App\Models\PaymentMethod;
use App\Http\Requests\StorePaymentMethodRequest;
use App\Http\Requests\UpdatePaymentMethodRequest;

class PaymentMethodController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:paymentMethod-list|paymentMethod-create|paymentMethod-edit|paymentMethod-delete', ['only' => ['index','store']]);
        $this->middleware('permission:paymentMethod-create', ['only' => ['create','store']]);
        $this->middleware('permission:paymentMethod-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:paymentMethod-delete', ['only' => ['destroy']]);
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
     * @param  \App\Http\Requests\StorePaymentMethodRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StorePaymentMethodRequest $request): \Illuminate\Http\JsonResponse
    {
        $paymentMethod = PaymentMethod::create($request->all());

        if($paymentMethod) {
            return response()->json(['success' => true, 'data' => $paymentMethod]);
        }

        return response()->json(['success' => false]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PaymentMethod  $paymentMethod
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(PaymentMethod $paymentMethod): \Illuminate\Http\JsonResponse
    {
        return response()->json(['success' => true, 'data' => $paymentMethod]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PaymentMethod  $paymentMethod
     * @return \Illuminate\Http\Response
     */
    public function edit(PaymentMethod $paymentMethod)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePaymentMethodRequest  $request
     * @param  \App\Models\PaymentMethod  $paymentMethod
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdatePaymentMethodRequest $request, PaymentMethod $paymentMethod): \Illuminate\Http\JsonResponse
    {
        $update = $paymentMethod->update($request->all());

        if($update) {
            return response()->json(['success' => true, 'data' => $paymentMethod]);
        }

        return response()->json(['success' => false]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PaymentMethod  $paymentMethod
     * @return \Illuminate\Http\Response
     */
    public function destroy(PaymentMethod $paymentMethod): \Illuminate\Http\JsonResponse
    {
        $delete = $paymentMethod->delete();
        if($delete) {
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false]);
    }
}
