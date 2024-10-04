<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class MaritalStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('marital_statuses')->insertOrIgnore([
            [
                'title' => 'Unmarried',
                'is_active' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Divorced',
                'is_active' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Awaiting Divorced',
                'is_active' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Widow',
                'is_active' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Widower',
                'is_active' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Separated',
                'is_active' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Anulled',
                'is_active' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => '2nd Marriage',
                'is_active' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
        ]);
    }
}
