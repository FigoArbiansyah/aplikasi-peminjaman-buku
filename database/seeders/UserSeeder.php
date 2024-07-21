<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            "name" => "Admin Perpustakaan",
            "role_id" => 1,
            "email" => "admin_super@gmail.com",
            "password" => "4dm!n5up3R",
        ]);
        User::create([
            "name" => "Member 1",
            "role_id" => 2,
            "email" => "member_1@gmail.com",
            "password" => "M3mb3r_1",
        ]);
    }
}
