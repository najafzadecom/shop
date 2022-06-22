<?php

namespace App\Http\Controllers;

use App\Models\CustomerGroup;
use App\Http\Requests\StoreCustomerGroupRequest;
use App\Http\Requests\UpdateCustomerGroupRequest;

class CustomerGroupController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:customerGroup-list|customerGroup-create|customerGroup-edit|customerGroup-delete', ['only' => ['index','store']]);
        $this->middleware('permission:customerGroup-create', ['only' => ['create','store']]);
        $this->middleware('permission:customerGroup-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:customerGroup-delete', ['only' => ['destroy']]);
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
     * @param  \App\Http\Requests\StoreCustomerGroupRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StoreCustomerGroupRequest $request): \Illuminate\Http\JsonResponse
    {
        $customerGroup = CustomerGroup::create($request->all());

        if($customerGroup) {
            return response()->json(['success' => true, 'data' => $customerGroup]);
        }

        return response()->json(['success' => false]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CustomerGroup  $customerGroup
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(CustomerGroup $customerGroup): \Illuminate\Http\JsonResponse
    {
        return response()->json(['success' => true, 'data' => $customerGroup]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CustomerGroup  $customerGroup
     * @return \Illuminate\Http\Response
     */
    public function edit(CustomerGroup $customerGroup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCustomerGroupRequest  $request
     * @param  \App\Models\CustomerGroup  $customerGroup
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateCustomerGroupRequest $request, CustomerGroup $customerGroup): \Illuminate\Http\JsonResponse
    {
        $update = $customerGroup->update($request->all());

        if($update) {
            return response()->json(['success' => true, 'data' => $customerGroup]);
        }

        return response()->json(['success' => false]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CustomerGroup  $customerGroup
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(CustomerGroup $customerGroup): \Illuminate\Http\JsonResponse
    {
        $delete = $customerGroup->delete();
        if($delete) {
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false]);
    }
}
