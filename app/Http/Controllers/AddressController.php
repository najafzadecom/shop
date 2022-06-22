<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Http\Requests\StoreAddressRequest;
use App\Http\Requests\UpdateAddressRequest;

class AddressController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:address-list|address-create|address-edit|address-delete', ['only' => ['index','store']]);
        $this->middleware('permission:address-create', ['only' => ['create','store']]);
        $this->middleware('permission:address-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:address-delete', ['only' => ['destroy']]);
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
     * @param  \App\Http\Requests\StoreAddressRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StoreAddressRequest $request): \Illuminate\Http\JsonResponse
    {
        $address = Address::create($request->all());

        if($address) {
            return response()->json(['success' => true, 'data' => $address]);
        }

        return response()->json(['success' => false]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Address $address): \Illuminate\Http\JsonResponse
    {
        return response()->json(['success' => true, 'data' => $address]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function edit(Address $address)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAddressRequest  $request
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateAddressRequest $request, Address $address): \Illuminate\Http\JsonResponse
    {
        $update = $address->update($request->all());

        if($update) {
            return response()->json(['success' => true, 'data' => $address]);
        }

        return response()->json(['success' => false]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Address $address): \Illuminate\Http\JsonResponse
    {
        $delete = $address->delete();
        if($delete) {
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false]);
    }
}
