<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inhabitant extends Model
{
    use HasFactory;

    protected $table = 'inhabitants';

    protected $fillable = [
        'resident_id',
        'household_id',
        'isActive'
    ];

    public function Resident(){
        return $this->belongsTo('App\Models\Resident','resident_id');
    }
}
