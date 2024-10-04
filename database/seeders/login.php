<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Hash;
class login extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('logins')->insertOrIgnore([
            [
                'name' => 'Nikah Masnoon',
                'email' => 'admin@nikahmasnoon.com',
                'password' => Hash::make('masnoon@123!'),
                'short_password' => base64_encode('masnoon@123!'),
                'role' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Nikah Masnoon',
                'email' => 'manager@nikahmasnoon.com',
                'password' => Hash::make('Nikah@123'),
                'short_password' => base64_encode('Nikah@123'),
                'role' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
