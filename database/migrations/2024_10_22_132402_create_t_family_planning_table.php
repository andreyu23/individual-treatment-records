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
        Schema::create('t_family_planning', function (Blueprint $table) {
            $table->id();
            $table->string(column: 'fam_client_type');
            $table->string(column: 'fam_method');
            $table->string(column: 'fam_reason');
            $table->string(column: 'fam_schedule');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_family_planning');
    }
};
