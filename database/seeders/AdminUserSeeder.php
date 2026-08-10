<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['id' => 1],
            [
                'name' => 'Dr. Rama',
                'email' => 'rama@gmail.com',
                'password' => Hash::make('YourStrongPassword123!'),
            ]
        );
    }
}
