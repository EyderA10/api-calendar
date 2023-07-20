<?php

use App\Http\Controllers\Api\RoutesController;
use App\Http\Controllers\Api\ScheduleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('v1')->group(function () {
    Route::get('/filter-dates-calendar/{dateFrom}/{dateTo?}', [ScheduleController::class, 'filterCalendar']);
    Route::get('/route-calendar/{route_id}', [ScheduleController::class, 'findByRoute']);
    Route::get('/routes', [RoutesController::class, 'getRoutes']);
});
