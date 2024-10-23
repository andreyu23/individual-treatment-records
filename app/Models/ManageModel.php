<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManageModel extends Model
{
    use HasFactory;



    protected $table ="t_management";

    protected $fillable = [
        'management_manage',
        'management_other'
    ];
}
