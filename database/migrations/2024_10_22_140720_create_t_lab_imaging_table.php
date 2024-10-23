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
        Schema::create('t_lab_imaging', function (Blueprint $table) {
            $table->id();
            $table->string(column: 'lab_random_blood');
            $table->string(column: 'lab_cbc_platelet');
            $table->string(column: 'lab_chest_xray');
            $table->string(column: 'lab_creatine');
            $table->string(column: 'lab_elctrocardiogram');
            $table->string(column: 'lab_fasting_blood');
            $table->string(column: 'lab_occult_blood');
            $table->string(column: 'lab_fecalysis');
            $table->string(column: 'lab_hba');
            $table->string(column: 'lab_lipid_profile');
            $table->string(column: 'lab_oral_glucose');
            $table->string(column: 'lab_pap_smear');
            $table->string(column: 'lab_ppd_test');
            $table->string(column: 'lab_sputum_microscopy');
            $table->string(column: 'lab_urinalysis');
            $table->string(column: 'lab_others');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_lab_imaging');
    }
};
