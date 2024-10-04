<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class HeightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $heights = [];

        // Loop through feet from 4 to 6
        for ($feet = 4; $feet <= 6; $feet++) {
            // Loop through inches from 0 to 11
            for ($inches = 0; $inches <= 11; $inches++) {
                // Ensure we only include heights from 4'3" (51 inches) to 6'6" (78 inches)
                $totalInches = ($feet * 12) + $inches; // Total height in inches
                if ($totalInches >= 51 && $totalInches <= 78) {
                    $heightCm = ($feet * 30.48) + ($inches * 2.54); // Convert to cm

                    // Add the height data to the array
                    $heights[] = [
                        'height_feet' => $feet,
                        'height_inches' => $inches,
                        'height_cm' => round($heightCm, 2), // Round to 2 decimal places
                    ];
                }
            }
        }

        // Insert the heights into the database
        DB::table('heights')->insertOrIgnore($heights);
    }
}
