<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Attendance;

class Schedule extends Model
{
    protected $fillable = [
        'day_week',
        'begin',
        'final'
    ];

    public function shedules()
    {
    	return $this->belongsToMany(Attendance::class, 'attendances_schedules', 'schedule_id', 'attendance_id');
    }
}
