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
        Schema::create('t_patients_information', function (Blueprint $table) {
            $table->id();
            $table->string(column: 'patient_phic_pin');
            $table->string(column: 'patient_first_name');
            $table->string(column: 'patient_middle_name');
            $table->string(column: 'patient_last_name');
            $table->string(column: 'patient_extension');
            $table->string(column: 'patient_age');
            $table->string(column: 'patient_resident_add');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_patients_information');
    }
};
