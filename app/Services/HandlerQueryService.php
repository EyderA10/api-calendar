<?php

namespace App\Services;

use App\Models\Routes;
use App\Models\RoutesData;
use Carbon\Carbon;

class HandlerQueryService
{

    public function __construct()
    {
    }

    public function filterDates($dateFrom, $dateTo)
    {
        $dateFrom = Carbon::createFromFormat('d-m-Y', $dateFrom);
        $calendar_id = $_ENV['CALENDAR_USER'];
        if (!is_null($dateTo)) {
            $dateTo = Carbon::createFromFormat('d-m-Y', $dateTo);
            $data = RoutesData::where('calendar_id', $calendar_id)
                ->whereBetween('created_at', [$dateFrom, $dateTo])
                ->with('calendar', function ($queryCalendar) use ($dateFrom) {
                    $queryCalendar->with('daysDisabled', function ($queryD) use ($dateFrom) {
                        $queryD->whereDate('created_at', $dateFrom)->where('enabled', false);
                    });
                })
                ->with('route', function ($queryRoute) {
                    $queryRoute->with('reservations');
                })
                ->get();
        } else {
            $data = RoutesData::where('calendar_id', $calendar_id)
                ->whereDate('created_at', $dateFrom)
                ->with('calendar', function ($queryCalendar) use ($dateFrom) {
                    $queryCalendar->with('daysDisabled', function ($queryD) use ($dateFrom) {
                        $queryD->whereDate('created_at', $dateFrom)->where('enabled', false);
                    });
                })
                ->with('route', function ($queryRoute) {
                    $queryRoute->with('reservations');
                })
                ->get();
        }
        return $data;
    }

    public function findByRouteId($route_id)
    {
        $calendar_id = $_ENV['CALENDAR_USER'];
        $data = RoutesData::where('calendar_id', $calendar_id)
            ->where('routes_id', $route_id)
            ->with('calendar', function ($queryCalendar) {
                $queryCalendar->with('daysDisabled');
            })
            ->with('route', function ($queryRoute) {
                $queryRoute->with('reservations');
            })
            ->get();
        return $data;
    }

    public function getAllRoutes()
    {
        $routes = Routes::all();
        $data = array_map(fn ($route) => ['id' => $route['id'], 'title' => $route['title']], $routes->toArray());
        return $data;
    }
}
