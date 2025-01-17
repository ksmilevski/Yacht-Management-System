<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservationRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
            return [
                'yacht_id' => "required|exists:yachts,id",
                'user_name' => "required",
                'reservation_date' => "required|date|after:today",
                'duration_hours' => "required|integer|min:1",
            ];
    }
}
