<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    protected $fillable = ['name', 'email', 'phone', 'skill', 'is_verified', 'address', 'experience_years', 'hourly_rate'];

    public function requests()
    {
        return $this->hasMany(ServiceRequest::class);
    }
}
