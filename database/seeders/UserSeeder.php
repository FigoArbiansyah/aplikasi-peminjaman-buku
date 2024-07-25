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
            "name" => "Admin Ponpes",
            "role_id" => 1,
            "email" => "admin_super@gmail.com",
            "password" => "4dm!n5up3R",
            "institution_id" => 1,
        ]);

        User::create([
            "name" => "Asep Saepudin",
            "role_id" => 2,
            "email" => "asep@gmail.com",
            "password" => "M3mb3r_1",
            "institution_id" => 1,
        ]);
    }
}
