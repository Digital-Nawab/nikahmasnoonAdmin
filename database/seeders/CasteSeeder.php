<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class CasteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $biradaris = [
            ['title' => 'Sunni'],
            ['title' => 'Syed'],
            ['title' => 'Shaikh'],
            ['title' => 'Ansari/ Momin Ansar'],
            ['title' => 'Siddiqui'],
            ['title' => 'Usmani'],
            ['title' => 'Chishti'],
            ['title' => 'Idrisi'],
            ['title' => 'Farooqui'],
            ['title' => 'Pathan'],
            ['title' => 'Mughal'],
            ['title' => 'Qureshi'],
            ['title' => 'Khan'],
            ['title' => 'Chaudhary'],
            ['title' => 'Malik'],
            ['title' => 'Darzi'],
            ['title' => 'Lohar'],
            ['title' => 'Salmani / Nayi'],
            ['title' => 'Mirza'],
            ['title' => 'Saifi'],
            ['title' => 'Mansuri'],
            ['title' => 'Qureshi'],
            ['title' => 'Abbasi'],
            ['title' => 'Rajput Muslim'],
            ['title' => 'Hussaini Brahmin'],
            ['title' => 'Manihar'],
            ['title' => 'Attar'],
            ['title' => 'Dhunia'],
            ['title' => 'Faqir'],
            ['title' => 'Gaddi'],
            ['title' => 'Garha'],
            ['title' => 'Jat Muslim'],
            ['title' => 'Kasai'],
            ['title' => 'Kayamkhani'],
            ['title' => 'Hanafi '],
            ['title' => 'Shafi '],
            ['title' => 'Memons'],
            ['title' => 'Sulaymani Bohra'],
        ];
        DB::table('castes')->insertOrIgnore($biradaris);
    }
}
