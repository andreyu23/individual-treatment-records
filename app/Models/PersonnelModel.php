<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonnelModel extends Model
{
    use HasFactory;

    protected $table = "t_chu_rhu_personnel";

    protected $fillable = [
        'chu_rhu_mode_transact',
        'chu_rhu_date',
        'chu_rhu_time',
        'chu_rhu_bp',
        'chu_rhu_temperature',
        'chu_rhu_rr',
        'chu_rhu_hr',
        'chu_rhu_o_sat',
        'chu_rhu_pr',
        'chu_rhu_waist_circumference',
        'chu_rhu_height',
        'chu_rhu_weight',
        'chu_rhu_administered_by',
        'chu_rhu_referred_from',
        'chu_rhu_referred_to',
        'chu_rhu_reason_refer',
        'chu_rhu_referred_by',
        'chu_rhu_nature_visit',
        'chu_rhu_attending_provider',
    ];
}
