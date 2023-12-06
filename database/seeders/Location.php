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
            'vehicle_name' => 'Honda Vios',
            'name' => 'Leah Oquindo',
            'vehiclePlate' => 'PRN-876',
            'latitude' => '14.767800',
            'longitude' => '121.043700',
        ]);

        $locations = ModelsLocation::create([
            'vehicle_name' => 'Toyota Hilux',
            'name' => 'Kurt Axel Nanalis',
            'vehiclePlate' => 'CAL-801',
            'latitude' => '14.7505',
            'longitude' => '121.05372',
        ]);

        $locations = ModelsLocation::create([
            'vehicle_name' => 'Toyota Hilux',
            'name' => 'Kurt Axel Nanalis',
            'vehiclePlate' => 'CAL-823',
            'latitude' => '15.170950',
            'longitude' => '120.623890',
        ]);

        $locations = ModelsLocation::create([
            'vehicle_name' => 'Toyota Hilux',
            'name' => 'Kurt Axel Nanalis',
            'vehiclePlate' => 'CAL-823',
            'latitude' => '15.170950',
            'longitude' => '120.623890',
        ]);
    }
}
