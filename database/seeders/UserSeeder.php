<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $randomString = bin2hex(random_bytes(32));

        User::create([
            "name" => "Admin",
            "username" => "admin",
            "password" => bcrypt("password"),
            "email" => "admin",
            "auth_key" => $randomString,
        ]);

        $randomString = bin2hex(random_bytes(32));

        User::create([
            "name" => "Admin1",
            "username" => "admin1",
            "password" => bcrypt("password"),
            "email" => "admin1",
            "auth_key" => $randomString


        ]);
    }
}
