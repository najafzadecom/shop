<?php

namespace App\Observers;

use App\Models\NoteCategory;

class NoteCategoryObserver
{
    /**
     * Handle the NoteCategory "created" event.
     *
     * @param  \App\Models\NoteCategory  $noteCategory
     * @return void
     */
    public function created(NoteCategory $noteCategory)
    {
        //
    }

    /**
     * Handle the NoteCategory "updated" event.
     *
     * @param  \App\Models\NoteCategory  $noteCategory
     * @return void
     */
    public function updated(NoteCategory $noteCategory)
    {
        //
    }

    /**
     * Handle the NoteCategory "deleted" event.
     *
     * @param  \App\Models\NoteCategory  $noteCategory
     * @return void
     */
    public function deleted(NoteCategory $noteCategory)
    {
        //
    }

    /**
     * Handle the NoteCategory "restored" event.
     *
     * @param  \App\Models\NoteCategory  $noteCategory
     * @return void
     */
    public function restored(NoteCategory $noteCategory)
    {
        //
    }

    /**
     * Handle the NoteCategory "force deleted" event.
     *
     * @param  \App\Models\NoteCategory  $noteCategory
     * @return void
     */
    public function forceDeleted(NoteCategory $noteCategory)
    {
        //
    }
}
