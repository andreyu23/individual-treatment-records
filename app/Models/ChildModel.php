<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChildModel extends Model
{
    use HasFactory;


    protected $table = "t_child_immunization";


    protected $fillable = [
        'child_weight',
        'child_immunization',
        'child_immunization_other',
        'child_date',
    ];
}
