<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Worker extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name', 
        'email', 
        'phone', 
        'password',
        'skill', 
        'service',
        'is_verified', 
        'address', 
        'profile_image',
        'experience_years', 
        'hourly_rate', 
        'rating',
        'is_available',
        'documents'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'is_verified' => 'boolean',
        'is_available' => 'boolean',
        'experience_years' => 'integer',
        'hourly_rate' => 'decimal:2',
        'rating' => 'decimal:1',
    ];

    public function requests()
    {
        return $this->hasMany(ServiceRequest::class);
    }

    public function services()
    {
        return $this->belongsToMany(Service::class, 'service_worker')
                    ->withPivot('price', 'specialization')
                    ->withTimestamps();
    }

    public function reviews()
    {
        return $this->hasMany(ServiceRequest::class, 'worker_id')
                    ->where('status', 'completed');
    }
}
