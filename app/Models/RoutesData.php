<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoutesData extends Model
{
    use HasFactory;

    protected $table = 'routes_data';

    protected $fillable = [
        'id',
        'routes_id',
        'calendar_id',
        'vinculation_route',
        'route_circular',
        'date_init',
        'date_finish',
        'mon',
        'tue',
        'wed',
        'thu',
        'fri',
        'sat',
        'sun',
        'updated_at',
        'created_at',
    ];

    // tuve un incoveniente con el route_id que se mostraba en el json
    // entonces lo que hice para solucionar fue cambiarlo a routes_id
    // ya que es lo que requeria laravel para asi comprendiera.
    public function route()
    {
        return $this->belongsTo('App\Models\Routes', 'routes_id');
    }

    public function calendar()
    {
        return $this->belongsTo('App\Models\Calendar', 'calendar_id');
    }
}
