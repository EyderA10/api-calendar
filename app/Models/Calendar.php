<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    use HasFactory;

    protected $table = 'calendar';

    protected $fillable = [
        'id',
		'calendar_id',
		'name',
		'updated_at',
		'created_at'
    ];

    public function daysDisabled()
    {
        return $this->hasMany('App\Models\CalendarDaysDisabled');
    }
}
