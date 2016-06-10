<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Doctor;

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

    public function doctor()
    {
        return $this->hasOne('App\Doctor');
    }
}
