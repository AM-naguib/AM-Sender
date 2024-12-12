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
            "username" => "1",
            "phone" => "201120488336",
            "verified" => 1,
            "password" => bcrypt("1"),
            "auth_key" => $randomString,
        ]);

        $randomString = bin2hex(random_bytes(32));

        User::create([
            "name" => "Admin1",
            "username" => "admin1",
            "phone" => "12345678950",
            "verified" => 0,
            "password" => bcrypt("1"),
            "auth_key" => $randomString


        ]);
    }
}
