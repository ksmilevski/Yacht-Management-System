<?php

namespace App\Actions;

use App\Enums\StatusEnum;
use App\Models\Reservation;

class CancelReservationAction
{
    public function execute(Reservation $reservation)
    {
        $reservation->update([
            'status' => StatusEnum::CANCELLED
        ]);
    }

}
