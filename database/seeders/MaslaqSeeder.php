<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class MaslaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('maslaqs')->insertOrIgnore([
            
            [
                'title' => 'Barelvi (Dargah/Niyaz)',
            ],
            [
                'title' => 'Deobandi (Tablighi)',
            ],
            [
                'title' => 'Ahle Hadis (Salafi)',
            ],
            [
                'title' => 'No Maslak (Sunni)',
            ],
            [
                'title' => 'Shafai',
            ],
            [
                'title' => 'Maliki',
            ],
            [
                'title' => 'Hanbali',
            ],
            [
                'title' => 'Shiya',
            ],
            [
                'title' => 'Jamat Islami',
            ],
            [
                'title' => 'Reverted(New) Muslim',
            ],
        ]);
    }
}
