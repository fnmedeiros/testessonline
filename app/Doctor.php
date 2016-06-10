<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Health_Center;
use App\Specialty;


class Doctor extends Model
{
    protected $fillable = [
        'person_id',
        'specialty_id',
        'crm'
    ];

    public function health_centers()
    {
    	return $this->belongsToMany(Health_Center::class, 'doctors_health_centers', 'doctor_id', 'health_center_id');
    }

    public function specialties()
    {
    	return $this->belongsToMany(Specialty::class, 'doctors_specialties', 'doctor_id', 'specialty_id');
    }
}
