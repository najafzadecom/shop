<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use App\Http\Requests\StoreContractRequest;
use App\Http\Requests\UpdateContractRequest;

class ContractController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:contract-list|contract-create|contract-edit|contract-delete', ['only' => ['index','store']]);
        $this->middleware('permission:contract-create', ['only' => ['create','store']]);
        $this->middleware('permission:contract-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:contract-delete', ['only' => ['destroy']]);
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
     * @param  \App\Http\Requests\StoreContractRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StoreContractRequest $request): \Illuminate\Http\JsonResponse
    {
        $contract = Contract::create($request->all());

        if($contract) {
            return response()->json(['success' => true, 'data' => $contract]);
        }

        return response()->json(['success' => false]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contract  $contract
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Contract $contract): \Illuminate\Http\JsonResponse
    {
        return response()->json(['success' => true, 'data' => $contract]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contract  $contract
     * @return \Illuminate\Http\Response
     */
    public function edit(Contract $contract)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateContractRequest  $request
     * @param  \App\Models\Contract  $contract
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateContractRequest $request, Contract $contract): \Illuminate\Http\JsonResponse
    {
        $update = $contract->update($request->all());

        if($update) {
            return response()->json(['success' => true, 'data' => $contract]);
        }

        return response()->json(['success' => false]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contract  $contract
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Contract $contract): \Illuminate\Http\JsonResponse
    {
        $delete = $contract->delete();
        if($delete) {
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false]);
    }
}
