<?php

namespace App\Observers;

use App\Models\CustomerGroup;

class CustomerGroupObserver
{
    /**
     * Handle the CustomerGroup "created" event.
     *
     * @param  \App\Models\CustomerGroup  $customerGroup
     * @return void
     */
    public function created(CustomerGroup $customerGroup)
    {
        //
    }

    /**
     * Handle the CustomerGroup "updated" event.
     *
     * @param  \App\Models\CustomerGroup  $customerGroup
     * @return void
     */
    public function updated(CustomerGroup $customerGroup)
    {
        //
    }

    /**
     * Handle the CustomerGroup "deleted" event.
     *
     * @param  \App\Models\CustomerGroup  $customerGroup
     * @return void
     */
    public function deleted(CustomerGroup $customerGroup)
    {
        //
    }

    /**
     * Handle the CustomerGroup "restored" event.
     *
     * @param  \App\Models\CustomerGroup  $customerGroup
     * @return void
     */
    public function restored(CustomerGroup $customerGroup)
    {
        //
    }

    /**
     * Handle the CustomerGroup "force deleted" event.
     *
     * @param  \App\Models\CustomerGroup  $customerGroup
     * @return void
     */
    public function forceDeleted(CustomerGroup $customerGroup)
    {
        //
    }
}
