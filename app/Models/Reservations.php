<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservations extends Model
{
    use HasFactory;

    protected $table = 'reservations';

    protected $fillable = [
        'id',
        'user_plan_id',
        'routes_id',
        'track_id',
        'reservation_start',
        'reservation_end',
        'route_stop_origin_id',
        'route_stop_destination_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function userPlan()
    {
        return $this->belongsTo('App\Models\UserPlans', 'user_plan_id');
    }

    public function route()
    {
        return $this->belongsTo('App\Models\Routes', 'routes_id', 'id');
    }
}
