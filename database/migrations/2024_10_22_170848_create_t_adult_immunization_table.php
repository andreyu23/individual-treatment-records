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
        Schema::create('t_adult_immunization', function (Blueprint $table) {
            $table->id();
            $table->string(column: 'adult_immunization');
            $table->string(column: 'adult_immunization_other');
            $table->string(column: 'adult_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_adult_immunization_tablw');
    }
};
