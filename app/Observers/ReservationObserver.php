<?php

namespace App\Observers;

use App\Enums\StatusEnum;
use App\Models\Reservation;

class ReservationObserver
{
    public function creating(Reservation $reservation): void
    {
        $reservation->status = StatusEnum::PENDING;
    }
    /**
     * Handle the Reservation "created" event.
     */
    public function created(Reservation $reservation): void
    {
        //
    }

    /**
     * Handle the Reservation "updated" event.
     */
    public function updated(Reservation $reservation): void
    {
        //
    }
    public function deleting(Reservation $reservation): void
    {

    }
    /**
     * Handle the Reservation "deleted" event.
     */
    public function deleted(Reservation $reservation): void
    {
        //
    }

    /**
     * Handle the Reservation "restored" event.
     */
    public function restored(Reservation $reservation): void
    {
        //
    }

    /**
     * Handle the Reservation "force deleted" event.
     */
    public function forceDeleted(Reservation $reservation): void
    {
        //
    }
}
