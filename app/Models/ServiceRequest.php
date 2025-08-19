<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ServiceRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'service_id', 
        'worker_id',
        'location',
        'status',
        'scheduled_at',
        'notes'
    ];

    protected $casts = [
        'scheduled_at' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function worker()
    {
        return $this->belongsTo(Worker::class);
    }

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }
}
