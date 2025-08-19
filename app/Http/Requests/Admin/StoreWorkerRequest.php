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
            'is_verified' => 'nullable|boolean',
        ];
    }
}
