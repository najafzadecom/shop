<?php

namespace App\Observers;

use App\Models\ExpenseCategory;

class ExpenseCategoryObserver
{
    /**
     * Handle the ExpenseCategory "created" event.
     *
     * @param  \App\Models\ExpenseCategory  $expenseCategory
     * @return void
     */
    public function created(ExpenseCategory $expenseCategory)
    {
        //
    }

    /**
     * Handle the ExpenseCategory "updated" event.
     *
     * @param  \App\Models\ExpenseCategory  $expenseCategory
     * @return void
     */
    public function updated(ExpenseCategory $expenseCategory)
    {
        //
    }

    /**
     * Handle the ExpenseCategory "deleted" event.
     *
     * @param  \App\Models\ExpenseCategory  $expenseCategory
     * @return void
     */
    public function deleted(ExpenseCategory $expenseCategory)
    {
        //
    }

    /**
     * Handle the ExpenseCategory "restored" event.
     *
     * @param  \App\Models\ExpenseCategory  $expenseCategory
     * @return void
     */
    public function restored(ExpenseCategory $expenseCategory)
    {
        //
    }

    /**
     * Handle the ExpenseCategory "force deleted" event.
     *
     * @param  \App\Models\ExpenseCategory  $expenseCategory
     * @return void
     */
    public function forceDeleted(ExpenseCategory $expenseCategory)
    {
        //
    }
}
