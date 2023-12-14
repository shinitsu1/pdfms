<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Provider\Fakecar;
use App\Models\Vehicles;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vehicles>
 */
class VehiclesFactory extends Factory
{
    // /**
    //  * Define the model's default state.
    //  *
    //  *
    //  * @return array<string, mixed>
    //  */

    protected $model = Vehicles::class;


    public function definition(): array
    {
        $this->faker->addProvider(new Fakecar($this->faker));
        $vehicle = $this->faker->vehicleArray();
        return [
            'name' => 'vehicle',
            'role' => 'vehicle',
            'plate' => $this->faker->vehicleRegistration,
            'brand' => 'Toyota',
            'model' => 'Hilux',
            'vin' => $this->faker->vin,
            'unique_identifier' => fake()->numerify('##########'),
            'status' => fake()->randomElement([0,1]),
            // 'phone' => fake()->numerify('09#########'),
            // 'employee_id' => fake()->numerify('###-###-###'),
            // 'gender' => fake()->randomElement(['Male', 'Female']),
            // 'address' => fake()->address(),

            // 'shift' => fake()->randomElement(['Day', 'Night']),
            // 'password' => Hash::make('12345'),
            // 'emergency_phone' =>fake()->numerify('09#########'),
            // 'position' => fake()->randomElement(['PMAJ Chief of Police', 'PCPT Deputy Chief', 'PEMS SESPO', 'Admin PNCO', 'Operation PNCO', 'Investigation PNCO', 'Logistic PNCO', 'PCR PNCO', 'Intel PNCO']),
            // 'age' => fake()->numberBetween($min = 18, $max = 22),
        ];
    }
}
