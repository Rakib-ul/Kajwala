<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    protected $fillable = ['name', 'email', 'phone', 'skill', 'is_verified'];

    public function requests()
    {
        return $this->hasMany(ServiceRequest::class);
    }
}
