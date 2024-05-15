<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Household extends Model
{
    use HasFactory;


    protected $table = 'households';

    protected $fillable = [
        
        'id',
        'NameE',
        'start_time',
        'end_time' ,
        'firstName',
        'middleName',
        'lastName',
        'street',
        'brgy',
        'city',
        'isActive',
        'hp1',
        'hp2',
        'hp3',
        'hp4',
        'hp5',
        'hp6',
        'hp7',
        'hp8',
        'hp9',
        'hp10',
        'hp11',
        'hp12',
        'hp13',
        'hp14',
        'hp15',
        'hp16',
        'hp17',
        'hp18',
        'hp19',
        'hp20',
        'hp21',
        'hp22',
        'hp23',
        'hp24',
        'hp25',
        'hp26',
        'hp27',
        'hp43',
        'hp28',
        'hp29',
        'hp30',
        'hp31',
        'hp32',
        'hp33',
        'hp34',
        'hp35',
        'hp36',
        'hp37',
        'hp38',
        'hp39',
        'hp40',
        'hp41',
        'hp42',
        'hp44',
        'hp45',
        'hp46',
        'hp47',
        'hp48',
        'hp49',
        'hp50',

    ];

    public function Inhabitants(){
        return $this->hasMany('App\Models\Inhabitant','household_id');
    }
}
