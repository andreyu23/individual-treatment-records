<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PertinentModel extends Model
{
    use HasFactory;


    protected $table = "t_pertinent_findings";


    protected $fillable = [
        'pertinent_heent',
        'pertinent_heent_other',
        'pertinent_chest',
        'pertinent_chest_other',
        'pertinent_heart',
        'pertinent_heart_other',
        'pertinent_abdomen',
        'pertinent_abdomen_other',
        'pertinent_gastrointestinal',
        'pertinent_gastrointestinal_other',
        'pertinent_skeletal',
        'pertinent_endocrine',
        'pertinent_endocrine_other',
        'pertinent_genitourinary',
        'pertinent_genitourinary_other',
        'pertinent_recital_exam',
        'pertinent_recital_exam_other',
        'pertinent_respiratory',
        'pertinent_respiratory_other',
        'pertinent_skin',
        'pertinent_skin_other',
        'pertinent_neurological',
        'pertinent_neurological_other',
    ];
}



