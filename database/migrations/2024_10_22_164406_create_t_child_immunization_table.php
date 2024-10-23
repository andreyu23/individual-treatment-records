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
        Schema::create('t_child_immunization', function (Blueprint $table) {
            $table->id();
            $table->string(column: 'child_weight');
            $table->string(column: 'child_immunization');
            $table->string(column: 'child_immunization_other');
            $table->string(column: 'child_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_child_immunization');
    }
};
