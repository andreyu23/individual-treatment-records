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
        Schema::create('t_pertinent_findings', function (Blueprint $table) {
            $table->id();
            $table->string(column: 'pertinent_heent');
            $table->string(column: 'pertinent_heent_other');
            $table->string(column: 'pertinent_chest');
            $table->string(column: 'pertinent_chest_other');
            $table->string(column: 'pertinent_heart');
            $table->string(column: 'pertinent_heart_other');
            $table->string(column: 'pertinent_abdomen');
            $table->string(column: 'pertinent_abdomen_other');
            $table->string(column: 'pertinent_gastrointestinal');
            $table->string(column: 'pertinent_gastrointestinal_other');
            $table->string(column: 'pertinent_skeletal');
            $table->string(column: 'pertinent_endocrine');
            $table->string(column: 'pertinent_endocrine_other');
            $table->string(column: 'pertinent_genitourinary');
            $table->string(column: 'pertinent_genitourinary_other');
            $table->string(column: 'pertinent_recital_exam');
            $table->string(column: 'pertinent_recital_exam_other');
            $table->string(column: 'pertinent_respiratory');
            $table->string(column: 'pertinent_respiratory_other');
            $table->string(column: 'pertinent_skin');
            $table->string(column: 'pertinent_skin_other');
            $table->string(column: 'pertinent_neurological');
            $table->string(column: 'pertinent_neurological_other');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_pertinent_findings');
    }
};
