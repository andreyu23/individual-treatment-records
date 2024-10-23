<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurposeVisitModel extends Model
{
    use HasFactory;


    protected $table = "t_purpose_of_visit";

    protected $fillable = [
        'purpose_visit_type',
        'purpose_visit_chief_complaints',
        'purpose_visit_other_complaints',
    ];
}
