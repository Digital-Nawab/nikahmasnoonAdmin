<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class FamilyTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $family = [
            ['title' => 'Very Religious'],
            ['title' => 'Religious'],
            ['title' => 'Moderate'],
            ['title' => 'Modern'],
        ];
        DB::table('family_types')->insertOrIgnore($family);
    }
}
