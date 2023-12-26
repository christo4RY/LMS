<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserGeneateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt(123123),
            'role' => 'admin',
            'status' => 1,
        ]);
        User::create([
            'name' => 'Instructor',
            'email' => 'instructor@gmail.com',
            'password' => bcrypt(123123),
            'role' => 'instructor',
            'status' => 1,
        ]);

        User::create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => bcrypt(123123),
            'role' => 'user',
            'status' => 1,
        ]);
    }
}
