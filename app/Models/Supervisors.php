<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supervisors extends Model
{
    use HasFactory;

    protected $fillable = [
        'photo',
        'last_name',
        'first_name',
        'email',
        'department',
        'position',
        'phone',
        'password',
        'role',
        'name',
        // Add other attributes as needed
    ];
}
