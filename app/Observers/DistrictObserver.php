<?php

namespace App\Observers;

use App\Models\District;

class DistrictObserver
{
    /**
     * Handle the District "created" event.
     *
     * @param  \App\Models\District  $district
     * @return void
     */
    public function created(District $district)
    {
        //
    }

    /**
     * Handle the District "updated" event.
     *
     * @param  \App\Models\District  $district
     * @return void
     */
    public function updated(District $district)
    {
        //
    }

    /**
     * Handle the District "deleted" event.
     *
     * @param  \App\Models\District  $district
     * @return void
     */
    public function deleted(District $district)
    {
        //
    }

    /**
     * Handle the District "restored" event.
     *
     * @param  \App\Models\District  $district
     * @return void
     */
    public function restored(District $district)
    {
        //
    }

    /**
     * Handle the District "force deleted" event.
     *
     * @param  \App\Models\District  $district
     * @return void
     */
    public function forceDeleted(District $district)
    {
        //
    }
}
