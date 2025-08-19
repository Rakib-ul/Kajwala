<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'transaction_id',
        'status',
        'amount',
        'currency',
        'customer_name',
        'customer_email',
        'customer_phone',
        'customer_address',
        'response',
    ];

    protected $casts = [
        'response' => 'array',
    ];
}
