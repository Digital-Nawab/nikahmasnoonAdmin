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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('matrimony_for');
            $table->string('name');
            $table->string('user_id')->unique();
            $table->string('password');
            $table->string('gender');
            $table->string('caste_preference');
            $table->string('dob');
            $table->string('age')->nullable();
            $table->string('caste');
            $table->string('mobile');
            $table->string('Whatsapp_no');
            $table->string('email');
            $table->string('about')->nullable();
            $table->string('image');
            $table->string('sub_caste')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('height')->unique();
            $table->string('height_cm')->nullable();
            $table->string('family_type')->nullable();
            $table->string('any_disability')->nullable();
            $table->string('qualification')->nullable();
            $table->string('employed_in')->nullable();
            $table->string('occupation')->nullable();
            $table->string('annual_income')->nullable();
            $table->string('min_salary')->nullable();
            $table->string('max_salary')->nullable();
            $table->string('is_adhar_varified')->nullable();
            $table->string('membership_type')->nullable();
            $table->string('matching_code')->nullable();
            $table->string('Correspondence_Address')->nullable();
            $table->string('gallery_image')->nullable();
            $table->string('body_type')->nullable();
            $table->string('complexion')->nullable();
            $table->string('Language_spoken')->nullable();
            $table->string('Native_Hometown')->nullable();
            $table->string('Requirements')->nullable();
            $table->string('family_detail')->nullable();
            $table->string('other_qualification')->nullable();
            $table->string('Current_city')->nullable();
            $table->string('is_approved')->nullable();
            $table->string('is_active')->nullable();
            $table->string('end_date')->nullable();
            $table->string('package_id')->nullable();
            $table->string('paid')->nullable();
            $table->string('is_delete')->nullable();
            $table->string('is_marriage')->nullable();
            $table->string('date_time')->nullable();
            $table->string('Id_proof_name')->nullable();
            $table->string('Id_proof_number')->nullable();
            $table->string('Id_proof_image')->nullable();
            $table->string('address_proof_name')->nullable();
            $table->string('address_proof_number')->nullable();
            $table->string('address_proof_image')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
