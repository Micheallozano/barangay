<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [

        'projectname',
        'descript',
        'start_date',
        'start_amount',
        'end_amount',
        'end_date',
        'status',
        'barangay_id',
       
        
    ];


}
