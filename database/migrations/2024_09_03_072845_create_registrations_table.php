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
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->string('matrimony_for');
            $table->string('name');
            $table->string('user_id')->uniqe();
            $table->string('password');
            $table->string('profile_pic');
            $table->string('gender');
            $table->string('date_of_birth');
            $table->string('mobile');
            $table->string('whatsapp')->nullable();
            $table->string('email');
            $table->string('caste');
            $table->string('sub_caste');
            $table->string('caste_preference');
            $table->string('marital_status');
            $table->string('about')->nullable();
            $table->string('family_detail')->nullable();
            $table->string('Requirements')->nullable();
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->string('height');
            $table->string('height_cm');
            $table->string('family_type');
            $table->string('any_disability');
            $table->string('qualification');
            $table->string('other_qualification');
            $table->string('employed_in');
            $table->string('occupation');
            $table->string('annual_income');
            $table->string('min_salary');
            $table->string('max_salary');
            $table->string('body_type');
            $table->string('complexion');
            $table->string('Language_spoken');
            $table->string('Native_Hometown');
            $table->enum('is_active', ['0','1','2'])->default('0');
            $table->enum('is_varified', ['0','1',])->default('0');
            $table->enum('is_marriage', ['0','1',])->default('0');
            $table->string('membership_type');
            $table->rememberToken();
            $table->timestamps();
        });

        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrations');
    }
};
