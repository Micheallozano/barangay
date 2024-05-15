<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;

    protected $fillable = [
        'resident_id',
        'phone_number2',
        'type',
        'purpose',
        'quantity',
    ];

    public  function resident() {
        return $this->belongsTo(Resident::class, 'resident_id');
    }
}

