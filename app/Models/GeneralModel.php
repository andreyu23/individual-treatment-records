<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralModel extends Model
{
    use HasFactory;

    protected $table = "t_general_consultation";


    protected $fillable = [
        'general_date',
        'general_history',
        'general_physical_exam',
        'general_assessment',
        'general_treatment',
        'general_schedule',
    ];
}
