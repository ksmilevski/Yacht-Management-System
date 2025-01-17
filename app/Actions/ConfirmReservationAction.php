<?php

namespace App\Actions;

use App\Enums\StatusEnum;
use App\Models\Reservation;

class ConfirmReservationAction
{
    public function execute(Reservation $reservation)
    {
        $reservation->update([
            'status' => StatusEnum::CONFIRMED
        ]);
    }

}
