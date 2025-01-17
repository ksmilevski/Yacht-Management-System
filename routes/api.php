<?php

use App\Http\Controllers\ReservationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource("yachts",\App\Http\Controllers\YachtController::class);
Route::apiResource("reservations",\App\Http\Controllers\ReservationController::class)->only("index","store");
Route::apiResource("reviews",\App\Http\Controllers\ReviewController::class);

Route::prefix('/reservations/{reservation}')->group(function () {
    Route::put('/confirm', [ReservationController::class, 'confirm']);
    Route::put('/cancel', [ReservationController::class, 'cancel']);
});
