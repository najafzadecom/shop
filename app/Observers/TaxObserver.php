<?php

namespace App\Observers;

use App\Models\Tax;

class TaxObserver
{
    /**
     * Handle the Tax "created" event.
     *
     * @param  \App\Models\Tax  $tax
     * @return void
     */
    public function created(Tax $tax)
    {
        //
    }

    /**
     * Handle the Tax "updated" event.
     *
     * @param  \App\Models\Tax  $tax
     * @return void
     */
    public function updated(Tax $tax)
    {
        //
    }

    /**
     * Handle the Tax "deleted" event.
     *
     * @param  \App\Models\Tax  $tax
     * @return void
     */
    public function deleted(Tax $tax)
    {
        //
    }

    /**
     * Handle the Tax "restored" event.
     *
     * @param  \App\Models\Tax  $tax
     * @return void
     */
    public function restored(Tax $tax)
    {
        //
    }

    /**
     * Handle the Tax "force deleted" event.
     *
     * @param  \App\Models\Tax  $tax
     * @return void
     */
    public function forceDeleted(Tax $tax)
    {
        //
    }
}
