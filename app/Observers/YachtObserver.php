<?php

namespace App\Observers;

use App\Models\Reservation;
use App\Models\Yacht;

class YachtObserver
{
    /**
     * Handle the Yacht "created" event.
     */
    public function created(Yacht $yacht): void
    {
        //
    }

    /**
     * Handle the Yacht "updated" event.
     */
    public function updated(Yacht $yacht): void
    {
        //
    }
    public function deleting(Yacht $yacht): void
    {
        // Load all related reservations with their reviews
        $yacht->reservations->each(function (Reservation $reservation) {
            $reservation->review()->delete(); // Delete the review
        });

        // Delete reservations
        $yacht->reservations()->delete();
    }

    /**
     * Handle the Yacht "deleted" event.
     */
    public function deleted(Yacht $yacht): void
    {
        //
    }

    /**
     * Handle the Yacht "restored" event.
     */
    public function restored(Yacht $yacht): void
    {
        //
    }

    /**
     * Handle the Yacht "force deleted" event.
     */
    public function forceDeleted(Yacht $yacht): void
    {
        //
    }
}
