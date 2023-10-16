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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('eng_name');
            $table->string('mm_name');
            $table->string('father_name');
            $table->string('date_of_birth');
            $table->string('race');
            $table->string('religion');
            $table->string('nationality');
            $table->string('vacancy');
            $table->string('passport_no');
            $table->string('driver_license_no');

            $table->integer('nrc_code');
            $table->string('nrc_name');
            $table->string('nrc_r_m');
            $table->integer('nrc_number');

            $table->string('gender');
            $table->string('blood_type');
            $table->string('marital_status');
            $table->string('home_phone');
            $table->string('mobile_phone');
            $table->string('social_media_url');

            $table->string('reference_person_name');
            $table->string('job_position');
            $table->string('reference_email_address');
            $table->string('reference_phone_number');

            $table->string('family_member_name')->nullable();
            $table->string('relationship')->nullable();
            $table->string('family_date_of_birth')->nullable();
            $table->string('occupation')->nullable();
            $table->string('family_phone_number')->nullable();
            $table->string('family_address')->nullable();

            $table->string('country');
            $table->string('state');
            $table->string('township');
            $table->string('street_address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
