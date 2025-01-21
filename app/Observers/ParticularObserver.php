<?php

namespace App\Observers;

use App\Models\Particular;
use Illuminate\Support\Str;

class ParticularObserver
{
    /**
     * Handle the Particular "created" event.
     */
    public function created(Particular $particular): void
    {
        // slugify the title avec le helper

        $particular->slug = Str::slug($particular->title, '-');
        $particular->save();
    }

    /**
     * Handle the Particular "updated" event.
     */
    public function updated(Particular $particular): void
    {
        //
    }

    /**
     * Handle the Particular "deleted" event.
     */
    public function deleted(Particular $particular): void
    {
        //
    }

    /**
     * Handle the Particular "restored" event.
     */
    public function restored(Particular $particular): void
    {
        //
    }

    /**
     * Handle the Particular "force deleted" event.
     */
    public function forceDeleted(Particular $particular): void
    {
        //
    }
}
