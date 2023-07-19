<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Routes extends Model
{
    use HasFactory;

    protected $table = 'routes';

    protected $fillable = [
        'id',
		'external_id',
		'invitation_code',
		'title',
		'start_timestamp',
		'end_timestamp',
    ];

    public function reservations()
    {
        return $this->hasMany('App\Models\Reservations');
    }

    public function routesData()
    {
        return $this->hasMany('App\Models\RoutesData');
    }
}
