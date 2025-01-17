<?php

namespace Database\Factories;

use App\Models\Yacht;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reservation>
 */
class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'yacht_id' => Yacht::factory(),
            'user_name' => $this->faker->name,
            'reservation_date' => $this->faker->dateTimeBetween("tomorrow","+1 year"),
            'duration_hours' => $this->faker->numberBetween(1,5)
        ];
    }
}
