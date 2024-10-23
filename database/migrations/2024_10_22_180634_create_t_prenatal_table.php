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
        Schema::create('t_prenatal', function (Blueprint $table) {
            $table->id();
            $table->string(column: 'prenatal_gradivity');
            $table->string(column: 'prenatal_parity');
            $table->string(column: 'prenatal_term');
            $table->string(column: 'prenatal_preterm');
            $table->string(column: 'prenatal_live_birth');
            $table->string(column: 'prenatal_abortion');
            $table->string(column: 'prenatal_syphilis_result');
            $table->string(column: 'prenatal_penicillin');
            $table->string(column: 'prenatal_schedule');
            $table->string(column: 'prenatal_fundic_height');
            $table->string(column: 'prenatal_lmp');
            $table->string(column: 'prenatal_edc');
            $table->string(column: 'prenatal_iron');
            $table->string(column: 'prenatal_aog');
            $table->string(column: 'prenatal_tt');
            $table->string(column: 'prenatal_other');
            $table->string(column: 'prenatal_fetal_heart');
            $table->string(column: 'prenatal_visits');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_prenatal');
    }
};
