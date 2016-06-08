<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Health_Center extends Model
{
    protected $fillable = [
        'name',
        'fone',
        'address',
        'neighborhood',
        'complement',
        'city',
        'zip_code',
        'state'
    ];
}
