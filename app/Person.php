<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
<<<<<<< HEAD
    protected $table = 'people';
=======
>>>>>>> f52c187ad0496454c42ca4f11d694df67736da7f
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
