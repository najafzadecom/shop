<?php

namespace App\Observers;

use App\Models\ShippingMethod;

class ShippingMethodObserver
{
    /**
     * Handle the ShippingMethod "created" event.
     *
     * @param  \App\Models\ShippingMethod  $shippingMethod
     * @return void
     */
    public function created(ShippingMethod $shippingMethod)
    {
        //
    }

    /**
     * Handle the ShippingMethod "updated" event.
     *
     * @param  \App\Models\ShippingMethod  $shippingMethod
     * @return void
     */
    public function updated(ShippingMethod $shippingMethod)
    {
        //
    }

    /**
     * Handle the ShippingMethod "deleted" event.
     *
     * @param  \App\Models\ShippingMethod  $shippingMethod
     * @return void
     */
    public function deleted(ShippingMethod $shippingMethod)
    {
        //
    }

    /**
     * Handle the ShippingMethod "restored" event.
     *
     * @param  \App\Models\ShippingMethod  $shippingMethod
     * @return void
     */
    public function restored(ShippingMethod $shippingMethod)
    {
        //
    }

    /**
     * Handle the ShippingMethod "force deleted" event.
     *
     * @param  \App\Models\ShippingMethod  $shippingMethod
     * @return void
     */
    public function forceDeleted(ShippingMethod $shippingMethod)
    {
        //
    }
}
