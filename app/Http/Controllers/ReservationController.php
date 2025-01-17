<?php

namespace App\Http\Controllers;

use App\Actions\CancelReservationAction;
use App\Actions\ConfirmReservationAction;
use App\Http\Requests\ReservationRequest;
use App\Http\Resources\ResevationResource;
use App\Http\Resources\YachtResource;
use App\Models\Reservation;
use App\Models\Yacht;
use Illuminate\Console\View\Components\Confirm;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $status = $request->input("status");
        if ($status){
            $reservations = Reservation::query()
                ->with("yacht")
                ->where("status","=",$status)
                ->paginate(30);
        }else{
            $reservations = Reservation::all();
        }
        return ResevationResource::collection($reservations);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ReservationRequest $request)
    {
        $reservation = Reservation::query()->create($request->validated());
        return ResevationResource::make($reservation);
    }

    /**
     * Display the specified resource.
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
    public function confirm(Reservation $reservation): ResevationResource
    {
        (new ConfirmReservationAction)->execute($reservation);
        return ResevationResource::make($reservation);
    }
    public function cancel(Reservation $reservation): ResevationResource
    {
        (new CancelReservationAction)->execute($reservation);
        return ResevationResource::make($reservation);
    }
}
