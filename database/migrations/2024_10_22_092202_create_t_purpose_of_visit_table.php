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
        Schema::create('t_purpose_of_visit', function (Blueprint $table) {
            $table->id();
            $table->string(column: 'purpose_visit_type');
            $table->string(column: 'purpose_visit_chief_complaints');
            $table->string(column: 'purpose_visit_other_complaints');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_purpose_of_visit_tabel');
    }
};
