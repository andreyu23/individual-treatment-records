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
        Schema::create('t_postpartum', function (Blueprint $table) {
            $table->id();
            $table->string(column: 'postpartum_prenatal_outcome');
            $table->string(column: 'postpartum_child_last_name');
            $table->string(column: 'postpartum_child_first_name');
            $table->string(column: 'postpartum_child_middle_name');
            $table->string(column: 'postpartum_child_sex');
            $table->string(column: 'postpartum_child_length');
            $table->string(column: 'postpartum_child_weight');
            $table->string(column: 'postpartum_prenatal_delivered');
            $table->string(column: 'postpartum_place_delivery');
            $table->string(column: 'postpartum_mode_delivery');
            $table->string(column: 'postpartum_attendant');
            $table->string(column: 'postpartum_delivery_date');
            $table->string(column: 'postpartum_delivery_time');
            $table->string(column: 'postpartum_date_initiatied');
            $table->string(column: 'postpartum_time_breastfeed');
            $table->string(column: 'postpartum_date_after_day');
            $table->string(column: 'postpartum_date_after_week');
            $table->string(column: 'postpartum_danger_mother');
            $table->string(column: 'postpartum_danger_baby');
            $table->string(column: 'postpartum_date_vitamin');
            $table->string(column: 'postpartum_date_iron');
            $table->string(column: 'postpartum_number_iron');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_postpartum');
    }
};
