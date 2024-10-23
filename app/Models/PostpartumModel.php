<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostpartumModel extends Model
{
    use HasFactory;

    protected $table ="t_postpartum";

    protected $fillable = [

        'postpartum_prenatal_outcome',
        'postpartum_child_last_name',
        'postpartum_child_first_name',
        'postpartum_child_middle_name',
        'postpartum_child_sex',
        'postpartum_child_length',
        'postpartum_child_weight',
        'postpartum_prenatal_delivered',
        'postpartum_place_delivery',
        'postpartum_mode_delivery',
        'postpartum_attendant',
        'postpartum_delivery_date',
        'postpartum_delivery_time',
        'postpartum_date_initiatied',
        'postpartum_time_breastfeed',
        'postpartum_date_after_day',
        'postpartum_date_after_week',
        'postpartum_danger_mother',
        'postpartum_danger_baby',
        'postpartum_date_vitamin',
        'postpartum_date_iron',
        'postpartum_number_iron',
    ];
}
