<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Storage;

class Worker extends Authenticatable
{
    use HasFactory;

    protected $guard = 'worker';

    protected $fillable = [
        'name','email','phone','password','address',
        'hourly_rate','experience_years','profile_image','documents','bio',
        'is_available','is_verified','rating'
    ];

    protected $hidden = ['password','remember_token'];

    protected $casts = [
        'is_available' => 'boolean',
        'is_verified'  => 'boolean',
        'rating'       => 'decimal:2',
    ];

    public function services()
    {
        return $this->belongsToMany(Service::class)->withPivot('price','specialization')->withTimestamps();
    }

    public function serviceRequests()
    {
        return $this->hasMany(ServiceRequest::class);
    }

    public function reviews()
    {
        return $this->hasMany(WorkerReview::class);
    }

    public function getProfileImageUrlAttribute()
    {
        return $this->profile_image
            ? Storage::url($this->profile_image)
            : asset('images/default-worker.jpg');
    }
}
