<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
        'person_id',
        'specialty_id',
        'crm'
    ];
}
