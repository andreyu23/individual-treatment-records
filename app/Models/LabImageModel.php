<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LabImageModel extends Model
{
    use HasFactory;

    protected $table = "t_lab_imaging";

    protected $fillable = [
        'lab_random_blood',
        'lab_cbc_platelet',
        'lab_chest_xray',
        'lab_creatine',
        'lab_elctrocardiogram',
        'lab_fasting_blood',
        'lab_occult_blood',
        'lab_fecalysis',
        'lab_hba',
        'lab_lipid_profile',
        'lab_oral_glucose',
        'lab_pap_smear',
        'lab_ppd_test',
        'lab_sputum_microscopy',
        'lab_urinalysis',
        'lab_others',
    ];
}
