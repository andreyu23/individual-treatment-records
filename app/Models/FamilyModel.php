<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamilyModel extends Model
{
    use HasFactory;

    protected $table = "t_family_planning";

    protected $fillable = [
        'fam_client_type',
        'fam_method',
        'fam_reason',
        'fam_schedule',
    ];
}
