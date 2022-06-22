<?php

namespace App\Observers;

use App\Models\PredefinedReply;

class PredefinedReplyObserver
{
    /**
     * Handle the PredefinedReply "created" event.
     *
     * @param  \App\Models\PredefinedReply  $predefinedReply
     * @return void
     */
    public function created(PredefinedReply $predefinedReply)
    {
        //
    }

    /**
     * Handle the PredefinedReply "updated" event.
     *
     * @param  \App\Models\PredefinedReply  $predefinedReply
     * @return void
     */
    public function updated(PredefinedReply $predefinedReply)
    {
        //
    }

    /**
     * Handle the PredefinedReply "deleted" event.
     *
     * @param  \App\Models\PredefinedReply  $predefinedReply
     * @return void
     */
    public function deleted(PredefinedReply $predefinedReply)
    {
        //
    }

    /**
     * Handle the PredefinedReply "restored" event.
     *
     * @param  \App\Models\PredefinedReply  $predefinedReply
     * @return void
     */
    public function restored(PredefinedReply $predefinedReply)
    {
        //
    }

    /**
     * Handle the PredefinedReply "force deleted" event.
     *
     * @param  \App\Models\PredefinedReply  $predefinedReply
     * @return void
     */
    public function forceDeleted(PredefinedReply $predefinedReply)
    {
        //
    }
}
