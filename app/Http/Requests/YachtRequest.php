<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class YachtRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'name' => "required",
            'type' => "required|in:super yacht,classic",
            'capacity' => "required|integer|min:1",
            'hourly_rate' => "required|integer|min:1",
        ];
    }
}
