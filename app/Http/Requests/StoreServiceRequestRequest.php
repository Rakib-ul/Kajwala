<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreServiceRequestRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'service_id' => 'required|exists:services,id',
            'description' => 'required|string|max:500',
            'location' => 'required|string|max:255',
            'scheduled_at' => 'required|date|after:now',
            'notes' => 'nullable|string|max:1000',
        ];
    }
}