<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicles extends Model
{
    use HasFactory;

    protected $fillable = [
        'plate',
        'brand',
        'model',
        'vin',
        'role',
        'vehicle_code',
        // 'username',
        // 'phone',
        // 'emergency_phone',
        // 'password',
    ];
}
