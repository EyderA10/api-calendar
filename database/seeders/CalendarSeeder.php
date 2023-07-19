<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CalendarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('calendar')->insert([
            [
                "id" => 2,
                "calendar_id" => null,
                "name" => "Catalunya",
                "updated_at" => "2020-01-14 13:42:25",
                "created_at" => "2020-01-14 13:42:25"
            ],
            [
                "id" => 3,
                "calendar_id" => null,
                "name" => "test calendar",
                "updated_at" => "2021-05-03 12:29:46",
                "created_at" => "2021-05-03 12:29:46"
            ]
        ]);
    }
}
