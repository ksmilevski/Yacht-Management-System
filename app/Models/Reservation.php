<?php

namespace App\Models;

use App\Observers\ReservationObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
#[ObservedBy([ReservationObserver::class])]

class Reservation extends Model
{
    use HasFactory;

    protected $guarded =[];
    public function yacht(): BelongsTo
    {
        return $this->belongsTo(Yacht::class);
    }
    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }
}
