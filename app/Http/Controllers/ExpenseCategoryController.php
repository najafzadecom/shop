<?php

namespace App\Http\Controllers;

use App\Models\ExpenseCategory;
use App\Http\Requests\StoreExpenseCategoryRequest;
use App\Http\Requests\UpdateExpenseCategoryRequest;

class ExpenseCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:expenseCategory-list|expenseCategory-create|expenseCategory-edit|expenseCategory-delete', ['only' => ['index','store']]);
        $this->middleware('permission:expenseCategory-create', ['only' => ['create','store']]);
        $this->middleware('permission:expenseCategory-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:expenseCategory-delete', ['only' => ['destroy']]);
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
     * @param  \App\Http\Requests\StoreExpenseCategoryRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StoreExpenseCategoryRequest $request): \Illuminate\Http\JsonResponse
    {
        $expenseCategory = ExpenseCategory::create($request->all());

        if($expenseCategory) {
            return response()->json(['success' => true, 'data' => $expenseCategory]);
        }

        return response()->json(['success' => false]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ExpenseCategory  $expenseCategory
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(ExpenseCategory $expenseCategory): \Illuminate\Http\JsonResponse
    {
        return response()->json(['success' => true, 'data' => $expenseCategory]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ExpenseCategory  $expenseCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(ExpenseCategory $expenseCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateExpenseCategoryRequest  $request
     * @param  \App\Models\ExpenseCategory  $expenseCategory
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateExpenseCategoryRequest $request, ExpenseCategory $expenseCategory): \Illuminate\Http\JsonResponse
    {
        $update = $expenseCategory->update($request->all());

        if($update) {
            return response()->json(['success' => true, 'data' => $expenseCategory]);
        }

        return response()->json(['success' => false]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ExpenseCategory  $expenseCategory
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(ExpenseCategory $expenseCategory): \Illuminate\Http\JsonResponse
    {
        $delete = $expenseCategory->delete();
        if($delete) {
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false]);
    }
}
