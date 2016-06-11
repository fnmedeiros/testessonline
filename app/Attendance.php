<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Schedule;
use App\Doctor;
use App\Specialty;
use App\Health_Center;

class Attendance extends Model
{
    protected $fillable = [
        'health_center_id',
        'doctor_id'
    ];

    public function shedules()
    {
    	return $this->belongsToMany(Schedule::class, 'attendances_schedules', 'attendance_id', 'schedule_id');
    }

    public function doctor()
    {
        return $this->belongsTo('App\Doctor');
    }

    public function specialty()
    {
        return $this->belongsTo('App\Specialty');
    }

    public function healthCenter()
    {
        return $this->belongsTo('App\Health_Center');
    }

}
