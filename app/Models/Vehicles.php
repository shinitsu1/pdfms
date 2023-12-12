<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class Vehicles extends Model
{
    use HasFactory;

    protected $fillable = [
        'plate',
        'brand',
        'model',
        'vin',
        'role',
        'unique_identifier',
        'name',
        // 'username',
        // 'phone',
        // 'emergency_phone',
        // 'password',
    ];

    public function generateQRCode()
    {
        return QrCode::size(40)->color(0,0,0)->generate($this->unique_identifier);
    }

    public function size() {
        return QrCode::size(200)->color(0,0,0)->generate($this->unique_identifier);
    }
}
