<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin User',
            'username' => 'pembina',
            'password' => Hash::make('pembina123'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Regular User',
            'username' => 'user',
            'password' => Hash::make('user123'),
            'role' => 'user',
        ]);
    }
}