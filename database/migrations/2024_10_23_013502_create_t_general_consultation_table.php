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
        Schema::create('t_general_consultation', function (Blueprint $table) {
            $table->id();
            $table->string(column: 'general_date');
            $table->string(column: 'general_history');
            $table->string(column: 'general_physical_exam');
            $table->string(column: 'general_assessment');
            $table->string(column: 'general_treatment');
            $table->string(column: 'general_schedule');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_general_consultation');
    }
};
