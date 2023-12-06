<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Supervisors>
 */
class SupervisorsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'role' => 'supervisor',
            'photo' => '/storage/images/17017649261by1.png',
            'last_name' => fake()->lastName(),
            'first_name' =>fake()->firstName(),
            'name' => 'vehicle',
            'email' => fake()->unique()->safeEmail(),
            'phone' => fake()->numerify('09#########'),
            'password' => Hash::make('12345'),
        ];
    }
}
