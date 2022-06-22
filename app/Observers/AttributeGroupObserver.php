<?php

namespace App\Observers;

use App\Models\AttributeGroup;

class AttributeGroupObserver
{
    /**
     * Handle the AttributeGroup "created" event.
     *
     * @param  \App\Models\AttributeGroup  $attributeGroup
     * @return void
     */
    public function created(AttributeGroup $attributeGroup)
    {
        //
    }

    /**
     * Handle the AttributeGroup "updated" event.
     *
     * @param  \App\Models\AttributeGroup  $attributeGroup
     * @return void
     */
    public function updated(AttributeGroup $attributeGroup)
    {
        //
    }

    /**
     * Handle the AttributeGroup "deleted" event.
     *
     * @param  \App\Models\AttributeGroup  $attributeGroup
     * @return void
     */
    public function deleted(AttributeGroup $attributeGroup)
    {
        //
    }

    /**
     * Handle the AttributeGroup "restored" event.
     *
     * @param  \App\Models\AttributeGroup  $attributeGroup
     * @return void
     */
    public function restored(AttributeGroup $attributeGroup)
    {
        //
    }

    /**
     * Handle the AttributeGroup "force deleted" event.
     *
     * @param  \App\Models\AttributeGroup  $attributeGroup
     * @return void
     */
    public function forceDeleted(AttributeGroup $attributeGroup)
    {
        //
    }
}
