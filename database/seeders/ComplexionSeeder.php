<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ComplexionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('complexions')->insertOrIgnore([
            [
                'title' => 'Very Fair',
                'is_active' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Fair',
                'is_active' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Wheatish',
                'is_active' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Wheatish Brown',
                'is_active' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Dark',
                'is_active' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
        ]);
    }
}
