<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('heights', function (Blueprint $table) {
            $table->id();  // Auto increment primary key
            $table->integer('height_feet');  // Height in feet
            $table->integer('height_inches');  // Height in inches
            $table->integer('height_cm')->unique();  // Height in centimeters
            $table->enum('is_active', ['1','2'])->default('1');
            $table->timestamps();  // Created at, Updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('heights');
    }
};
