<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Accounts>
 */
class AccountsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'role' => 'police',
            'last_name' => fake()->lastName(),
            'first_name' => fake()->firstName(),
            'employee_id' => fake()->numerify('#####'),
            'email' => fake()->unique()->safeEmail(),
            'name' => 'vehicle',
            'phone' => fake()->numerify('09#########'),
            'department' => 'administrator',
            'position' => 'Patrolman',
            // 'employee_id' => fake()->numerify('###-###-###'),
            // 'gender' => fake()->randomElement(['Male', 'Female']),
            // 'address' => fake()->address(),
            // 'username' => fake()->userName(),
            'photo' => '/storage/images/17017649261by1.png',
            // 'shift' => fake()->randomElement(['Day', 'Night']),
            // 'password' => Hash::make('12345'),
            // 'emergency_phone' =>fake()->numerify('09#########'),
            // 'position' => fake()->randomElement(['PMAJ Chief of Police', 'PCPT Deputy Chief', 'PEMS SESPO', 'Admin PNCO', 'Operation PNCO', 'Investigation PNCO', 'Logistic PNCO', 'PCR PNCO', 'Intel PNCO']),
            // 'age' => fake()->numberBetween($min = 18, $max = 22),
        ];
    }
}
