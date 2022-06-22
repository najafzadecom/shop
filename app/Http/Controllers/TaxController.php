<?php

namespace App\Http\Controllers;

use App\Models\Tax;
use App\Http\Requests\StoreTaxRequest;
use App\Http\Requests\UpdateTaxRequest;

class TaxController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:tax-list|tax-create|tax-edit|tax-delete', ['only' => ['index','store']]);
        $this->middleware('permission:tax-create', ['only' => ['create','store']]);
        $this->middleware('permission:tax-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:tax-delete', ['only' => ['destroy']]);
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
     * @param  \App\Http\Requests\StoreTaxRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StoreTaxRequest $request): \Illuminate\Http\JsonResponse
    {
        $tax = Tax::create($request->all());

        if($tax) {
            return response()->json(['success' => true, 'data' => $tax]);
        }

        return response()->json(['success' => false]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tax  $tax
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Tax $tax): \Illuminate\Http\JsonResponse
    {
        return response()->json(['success' => true, 'data' => $tax]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tax  $tax
     * @return \Illuminate\Http\Response
     */
    public function edit(Tax $tax)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTaxRequest  $request
     * @param  \App\Models\Tax  $tax
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateTaxRequest $request, Tax $tax): \Illuminate\Http\JsonResponse
    {
        $update = $tax->update($request->all());

        if($update) {
            return response()->json(['success' => true, 'data' => $tax]);
        }

        return response()->json(['success' => false]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tax  $tax
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tax $tax): \Illuminate\Http\JsonResponse
    {
        $delete = $tax->delete();
        if($delete) {
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false]);
    }
}
