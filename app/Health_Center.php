<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Doctor;

class Health_Center extends Model
{
    protected $table = 'health_centers';

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

    public function doctors()
    {
        return $this->belongsToMany(Doctor::class, 'doctors_health_centers','health_center_id', 'doctor_id');
    }

    public function attendances()
    {
        return $this->hasMany('App\Attendance');
    }
}
