<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reservations')->insert([
            [
                "id" => 213,
                "user_plan_id" => 52,
                "routes_id" => 56,
                "track_id" => null,
                "reservation_start" => "2021-12-17 00:00:00",
                "reservation_end" => "2021-12-17 00:00:00",
                "route_stop_origin_id" => 597,
                "route_stop_destination_id" => 600,
                "created_at" => "2021-12-17 19:38:38",
                "updated_at" => "2021-12-17 19:38:38",
                "deleted_at" => null
            ],
            [
                "id" => 214,
                "user_plan_id" => 52,
                "routes_id" => 56,
                "track_id" => null,
                "reservation_start" => "2021-12-24 00:00:00",
                "reservation_end" => "2021-12-24 00:00:00",
                "route_stop_origin_id" => 597,
                "route_stop_destination_id" => 600,
                "created_at" => "2021-12-17 19:38:38",
                "updated_at" => "2021-12-17 19:38:38",
                "deleted_at" => null
            ],
            [
                "id" => 215,
                "user_plan_id" => 52,
                "routes_id" => 56,
                "track_id" => null,
                "reservation_start" => "2021-12-31 00:00:00",
                "reservation_end" => "2021-12-31 00:00:00",
                "route_stop_origin_id" => 597,
                "route_stop_destination_id" => 600,
                "created_at" => "2021-12-17 19:38:38",
                "updated_at" => "2021-12-17 19:38:38",
                "deleted_at" => null
            ]
        ]);
    }
}
