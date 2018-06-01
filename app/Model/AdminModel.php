<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AdminModel extends Model
{
    
    protected $table = "urc_018system3_general_info";
    protected $primaryKey = 'id';
    protected $fillable = [
        'interview_code',
        'patient_name',
        'age',
        'gender',
        'phone',
        'pro_code',
        'dcode',
        'ccode',
        'vcode',
        'village_area',
        'status'
    ];

}
