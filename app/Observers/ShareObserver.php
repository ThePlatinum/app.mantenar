<?php

namespace App\Observers;

use App\Models\Share;

class ShareObserver
{
    /**
     * Handle the Share "created" event.
     *
     * @param  \App\Models\Share  $share
     * @return void
     */
    public function created(Share $share)
    {
        //
    }

    /**
     * Handle the Share "updated" event.
     *
     * @param  \App\Models\Share  $share
     * @return void
     */
    public function updated(Share $share)
    {
        //
    }

    /**
     * Handle the Share "deleted" event.
     *
     * @param  \App\Models\Share  $share
     * @return void
     */
    public function deleted(Share $share)
    {
        //
    }

    /**
     * Handle the Share "restored" event.
     *
     * @param  \App\Models\Share  $share
     * @return void
     */
    public function restored(Share $share)
    {
        //
    }

    /**
     * Handle the Share "force deleted" event.
     *
     * @param  \App\Models\Share  $share
     * @return void
     */
    public function forceDeleted(Share $share)
    {
        //
    }
}
