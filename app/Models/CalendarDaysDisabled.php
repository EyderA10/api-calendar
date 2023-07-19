<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalendarDaysDisabled extends Model
{
    use HasFactory;

    protected $table = 'calendar_days_disabled';

    protected $fillable = [
        'id',
        'calendar_id',
        'day',
        'enabled',
        'updated_at',
        'created_at'
    ];

    public function calendars()
    {
        return $this->belongsTo('App\Models\Calendar', 'calendar_id');
    }
}
