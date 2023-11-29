<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vehicles>
 */
class VehiclesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'role' => 'vehicle',
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'vehicle_code' => fake()->numerify('##########'),
            // 'phone' => fake()->numerify('09#########'),
            // 'employee_id' => fake()->numerify('###-###-###'),
            // 'gender' => fake()->randomElement(['Male', 'Female']),
            // 'address' => fake()->address(),
            // 'username' => fake()->userName(),
            // 'shift' => fake()->randomElement(['Day', 'Night']),
            // 'password' => Hash::make('12345'),
            // 'emergency_phone' =>fake()->numerify('09#########'),
            // 'position' => fake()->randomElement(['PMAJ Chief of Police', 'PCPT Deputy Chief', 'PEMS SESPO', 'Admin PNCO', 'Operation PNCO', 'Investigation PNCO', 'Logistic PNCO', 'PCR PNCO', 'Intel PNCO']),
            // 'age' => fake()->numberBetween($min = 18, $max = 22),
        ];
    }
}
