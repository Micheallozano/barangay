<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resident extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'firstname',
        'middlename',
        'lastname',
        'birth_date',
        'suffix',
        'gender',
        'marital_status',
        'ethnicity',
        'phone_number',
        'barangay_id',
        'Brgy',
        'municipal',
        'province',
        'religion',
        'rule',
        'status',

       
    ];

    public function  barangay() {
        return $this->belongsTo(Barangay::class, 'barangay_id');
    }

    
}