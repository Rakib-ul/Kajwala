<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    // Define the fillable fields
    protected $fillable = [
        'name',
        'category',
        'price',
        'description',
        'is_active',
    ];

    // Relationship to ServiceRequests (one-to-many)
    public function requests()
    {
        return $this->hasMany(ServiceRequest::class);
    }

    // Many-to-many relationship with Worker
    public function workers()
    {
        return $this->belongsToMany(Worker::class)->withPivot('price', 'specialization');
    }
}
