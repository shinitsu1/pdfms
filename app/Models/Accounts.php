<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accounts extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        // 'email',
        'phone',
        // 'employee_id',
        // 'gender',
        // 'address',
        // 'username',
        // 'shift',
        // 'password',
        // 'emergency_phone',
        // Add other attributes as needed
    ];
}
