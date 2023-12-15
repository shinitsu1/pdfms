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
        'phone',
        'password',
        'role',
        'confirmation_token',
        
        // Add other attributes as needed
    ];
    protected $table = 'supervisors';
}
