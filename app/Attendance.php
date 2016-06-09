<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Schedule;

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
}
