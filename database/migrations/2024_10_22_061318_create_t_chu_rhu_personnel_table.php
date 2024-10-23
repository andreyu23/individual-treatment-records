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
        Schema::create('t_chu_rhu_personnel', function (Blueprint $table) {
            $table->id();
            $table->string(column: 'chu_rhu_mode_transact');
            $table->string(column: 'chu_rhu_date');
            $table->string(column: 'chu_rhu_time');
            $table->string(column: 'chu_rhu_bp');
            $table->string(column: 'chu_rhu_temperature');
            $table->string(column: 'chu_rhu_rr');
            $table->string(column: 'chu_rhu_hr');
            $table->string(column: 'chu_rhu_o_sat');
            $table->string(column: 'chu_rhu_pr');
            $table->string(column: 'chu_rhu_waist_circumference');
            $table->string(column: 'chu_rhu_height');
            $table->string(column: 'chu_rhu_weight');
            $table->string(column: 'chu_rhu_administered_by');
            $table->string(column: 'chu_rhu_referred_from');
            $table->string(column: 'chu_rhu_referred_to');
            $table->string(column: 'chu_rhu_reason_refer');
            $table->string(column: 'chu_rhu_referred_by');
            $table->string(column: 'chu_rhu_nature_visit');
            $table->string(column: 'chu_rhu_attending_provider');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_chu_rhu_personnel');
    }
};
