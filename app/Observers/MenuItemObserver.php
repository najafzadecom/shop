<?php

namespace App\Observers;

use App\Models\MenuItem;

class MenuItemObserver
{
    /**
     * Handle the MenuItem "created" event.
     *
     * @param  \App\Models\MenuItem  $menuItem
     * @return void
     */
    public function created(MenuItem $menuItem)
    {
        //
    }

    /**
     * Handle the MenuItem "updated" event.
     *
     * @param  \App\Models\MenuItem  $menuItem
     * @return void
     */
    public function updated(MenuItem $menuItem)
    {
        //
    }

    /**
     * Handle the MenuItem "deleted" event.
     *
     * @param  \App\Models\MenuItem  $menuItem
     * @return void
     */
    public function deleted(MenuItem $menuItem)
    {
        //
    }

    /**
     * Handle the MenuItem "restored" event.
     *
     * @param  \App\Models\MenuItem  $menuItem
     * @return void
     */
    public function restored(MenuItem $menuItem)
    {
        //
    }

    /**
     * Handle the MenuItem "force deleted" event.
     *
     * @param  \App\Models\MenuItem  $menuItem
     * @return void
     */
    public function forceDeleted(MenuItem $menuItem)
    {
        //
    }
}
