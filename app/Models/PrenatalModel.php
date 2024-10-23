<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrenatalModel extends Model
{
    use HasFactory;

    protected $table = "t_prenatal";


    protected $fillable = [
        'prenatal_gradivity',
        'prenatal_parity',
        'prenatal_term',
        'prenatal_preterm',
        'prenatal_live_birth',
        'prenatal_abortion',
        'prenatal_syphilis_result',
        'prenatal_penicillin',
        'prenatal_schedule',
        'prenatal_fundic_height',
        'prenatal_lmp',
        'prenatal_edc',
        'prenatal_iron',
        'prenatal_aog',
        'prenatal_tt',
        'prenatal_other',
        'prenatal_fetal_heart',
        'prenatal_visits',
    ];
}
