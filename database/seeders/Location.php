<?php

namespace Database\Seeders;

use App\Models\Location as ModelsLocation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Location extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      $locations = ModelsLocation::create([
            'vehicle_name' => 'Patrol Car',
            'name' => 'Leah Oquindo',
            'vehiclePlate' => 'PRN-876',
            'latitude' => '14.767800',
            'longitude' => '121.043700',
        ]);
    }
}
