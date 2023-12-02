<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $table = 'location'; // Define the table name

    protected $fillable = [
        'vehicle_name', 'latitude', 'longitude', 'vehiclePlate'
        // Add other fields from your locations table as needed
    ];

    // If you have timestamps (created_at, updated_at) in your table, set this to true/false as needed
    public $timestamps = false;
    
}
