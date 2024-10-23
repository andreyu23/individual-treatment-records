<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdultModel extends Model
{
    use HasFactory;


    protected $table = "t_adult_immunization";


    protected $fillable = [
        'adult_immunization',
        'adult_immunization_other',
        'adult_date',
    ];
}
