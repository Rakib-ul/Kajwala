<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreWorkerRequest extends FormRequest
{
    public function authorize(): bool { return auth()->check() && auth()->user()->role==='admin'; }
    public function rules(): array {
        return [
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:30',
            'skill' => 'nullable|string|max:255',
            'service' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
            'experience_years' => 'nullable|integer|min:0',
            'hourly_rate' => 'nullable|numeric|min:0',
            'rating' => 'nullable|numeric|min:0|max:5',
            'is_verified' => 'nullable|boolean',
            'is_available' => 'nullable|boolean',
        ];
    }
}
