<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;

    // Define the fillable fields
    protected $fillable = [
        'name',
        'slug',
        'category',
        'price',
        'min_price',
        'max_price',
        'description',
        'is_active',
        'icon',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'price' => 'decimal:2',
        'min_price' => 'decimal:2',
        'max_price' => 'decimal:2',
    ];

    // Relationship to ServiceRequests (one-to-many)
    public function requests()
    {
        return $this->hasMany(ServiceRequest::class);
    }

    // Many-to-many relationship with Worker
    public function workers()
    {
        return $this->belongsToMany(Worker::class, 'service_worker')
                    ->withPivot('price', 'specialization')
                    ->withTimestamps();
    }

    // Generate slug from name
    public static function boot()
    {
        parent::boot();
        
        static::creating(function ($service) {
            if (empty($service->slug)) {
                $service->slug = \Str::slug($service->name);
            }
        });
    }
}
