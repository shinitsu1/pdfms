<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserAccounts extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $admin = User::create([
            'name' => 'Karl Lewis T. Doctolero',
            'email' => 'karl@gmail.com',
            'password' => Hash::make('12345'),
            'role' => 'admin',
        ]);

        // seeding collector
        $collector = User::create([
            'name' => 'Kurt Axel D. Nanalis',
            'email' => 'kurt@gmail.com',
            'password' => Hash::make('12345'),
            'role' => 'supervisor',
        ]);

        // seeding residents
        $police = User::create([
            'name' => 'Ma. Leah R. Oquindo',
            'email' => 'leah@gmail.com',
            'password' => Hash::make('12345'),
            'role' => 'police',
        ]);

    }
}
