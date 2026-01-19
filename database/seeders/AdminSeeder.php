<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@kemendikdasmen.com',
            'username' => 'admin',
            'role' => 'admin',
            'password' => Hash::make('admin'),
        ]);
    }
}