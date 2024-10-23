<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiagnosisModel extends Model
{
    use HasFactory;


    protected $table ="t_diagnosis";

    protected $fillable = [
        'diagnosis_diagnosis',
        'diagnosis_other'
    ];
}
