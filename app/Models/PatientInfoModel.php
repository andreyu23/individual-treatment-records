<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientInfoModel extends Model
{
    use HasFactory;

    protected $table = "t_patients_information";

    protected $fillable = [
        'patient_phic_pin',
        'patient_first_name',
        'patient_middle_name',
        'patient_last_name',
        'patient_extension',
        'patient_age',
        'patient_resident_add',
    ];
}
