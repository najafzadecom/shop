<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use App\Http\Requests\StoreCurrencyRequest;
use App\Http\Requests\UpdateCurrencyRequest;

class CurrencyController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:currency-list|currency-create|currency-edit|currency-delete', ['only' => ['index','store']]);
        $this->middleware('permission:currency-create', ['only' => ['create','store']]);
        $this->middleware('permission:currency-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:currency-delete', ['only' => ['destroy']]);
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
     * @param  \App\Http\Requests\StoreCurrencyRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StoreCurrencyRequest $request): \Illuminate\Http\JsonResponse
    {
        $currency = Currency::create($request->all());

        if($currency) {
            return response()->json(['success' => true, 'data' => $currency]);
        }

        return response()->json(['success' => false]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Currency  $currency
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Currency $currency): \Illuminate\Http\JsonResponse
    {
        return response()->json(['success' => true, 'data' => $currency]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Currency  $currency
     * @return \Illuminate\Http\Response
     */
    public function edit(Currency $currency)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCurrencyRequest  $request
     * @param  \App\Models\Currency  $currency
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateCurrencyRequest $request, Currency $currency): \Illuminate\Http\JsonResponse
    {
        $update = $currency->update($request->all());

        if($update) {
            return response()->json(['success' => true, 'data' => $currency]);
        }

        return response()->json(['success' => false]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Currency  $currency
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Currency $currency): \Illuminate\Http\JsonResponse
    {
        $delete = $currency->delete();
        if($delete) {
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false]);
    }
}
