<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceRequest extends Model
{
    protected $fillable = [
        'user_id','service_id','worker_id','status','scheduled_at','notes'
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
