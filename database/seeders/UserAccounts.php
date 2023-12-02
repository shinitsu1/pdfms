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
            'photo' => '12345',
            'last_name' => 'Doctolero',
            'first_name' => 'Karl Lewis',
            'email' => 'karllewistdoctolero@gmail.com',
            'password' => Hash::make('12345'),
            'role' => 'admin',

        ]);

        // seeding collector
        $collector = User::create([
            'photo' => '12345',
            'last_name' => 'Nanalis',
            'first_name' => 'Kurt Axel',
            'email' => 'kurt@gmail.com',
            'password' => Hash::make('12345'),
            'role' => 'supervisor',
        ]);

        // seeding residents
        $police = User::create([
            'photo' => '12345',
            'last_name' => 'Oquindo',
            'first_name' => 'Ma. Leah',
            'email' => 'leah@gmail.com',
            'password' => Hash::make('12345'),
            'role' => 'police',
        ]);

    }
}
