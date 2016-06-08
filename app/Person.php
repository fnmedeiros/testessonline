<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = 'people';
    protected $fillable = [
        'name',
        'cpf',
        'fone',
        'mobile',
        'address',
        'neighborhood',
        'complement',
        'city',
        'zip_code',
        'state',
        'date_birth'
    ];
}
