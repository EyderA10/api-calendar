<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            [
                "id" => 26257972,
                "external_id" => "-26257972",
                "external_budget_id" => "-54",
                "external_route_id" => "-54",
                "track_id" => null,
                "name" => "EL BARQUITO 1",
                "notes" => null,
                "timestamp" => "2021-09-15 00:00:00",
                "arrival_address" => "Av. Meridiana \/ C. Mallorca (sortida ciutat),Avinguda Meridiana 178, Barcelona",
                "arrival_timestamp" => "2021-09-15 18:42:28",
                "departure_address" => "Camí de Can Ruti, 08916 Canyet, España",
                "departure_timestamp" => "2021-09-15 18:00:28",
                "capacity" => 10,
                "confirmed_pax_count" => 0,
                "reported_departure_timestamp" => null,
                "reported_departure_kms" => null,
                "reported_arrival_timestamp" => null,
                "reported_arrival_kms" => null,
                "reported_vehicle_plate_number" => null,
                "status" => -40,
                "status_info" => "{\"driver\": false, \"vehicle\": false, \"readings\": false, \"tracking\": false, \"ended_late\": false, \"play_service\": false, \"started_late\": false, \"stop_service\": false}",
                "reprocess_status" => 0,
                "return" => 0,
                "created" => "2021-09-13 20:28:18",
                "modified" => "2021-09-13 20:30:11",
                "synchronized_downstream" => null,
                "synchronized_upstream" => null,
                "province_id" => 8,
                "sale_tickets_drivers" => 0,
                "notes_drivers" => null,
                "itinerary_drivers" => "Camí de Can Ruti, 08916 Canyet, España -- Av. Meridiana \/ C. Mallorca (sortida ciutat),Avinguda Meridiana 178, Barcelona\nTransfer sólo ida\n\n20\/01\/2020 - 18:00:28 - Parada 1 -- Camí de Can Ruti, 08916 Canyet, España\n20\/01\/2020 - 18:21:28 - Parada 2 -- Av. Meridiana \/ Pg. Fabra i Puig (Forn de Pa - creuat el passeig),Avinguda Meridiana 387\n20\/01\/2020 - 18:29:28 - Parada 3 -- Av. Meridiana (bocana Metro Sagrera),Avinguda Meridiana 288, Barcelona\n20\/01\/2020 - 18:42:28 - Parada 4 -- Av. Meridiana \/ C. Mallorca (sortida ciutat),Avinguda Meridiana 178, Barcelona",
                "cost_if_externalized" => null
            ],
            [
                "id" => 26257973,
                "external_id" => "-26257973",
                "external_budget_id" => "-54",
                "external_route_id" => "-54",
                "track_id" => null,
                "name" => "EL BARQUITO 1",
                "notes" => null,
                "timestamp" => "2021-09-15 00:00:00",
                "arrival_address" => "Av. Meridiana \/ C. Mallorca (sortida ciutat),Avinguda Meridiana 178, Barcelona",
                "arrival_timestamp" => "2021-09-15 18:42:28",
                "departure_address" => "Camí de Can Ruti, 08916 Canyet, España",
                "departure_timestamp" => "2021-09-15 18:00:28",
                "capacity" => 10,
                "confirmed_pax_count" => 0,
                "reported_departure_timestamp" => null,
                "reported_departure_kms" => null,
                "reported_arrival_timestamp" => null,
                "reported_arrival_kms" => null,
                "reported_vehicle_plate_number" => null,
                "status" => -30,
                "status_info" => "{\"driver\": false, \"vehicle\": false, \"readings\": false, \"tracking\": false, \"ended_late\": false, \"play_service\": false, \"started_late\": false, \"stop_service\": false}",
                "reprocess_status" => 0,
                "return" => 0,
                "created" => "2021-09-13 20:28:18",
                "modified" => "2021-09-13 20:30:11",
                "synchronized_downstream" => null,
                "synchronized_upstream" => null,
                "province_id" => 8,
                "sale_tickets_drivers" => 0,
                "notes_drivers" => null,
                "itinerary_drivers" => "Camí de Can Ruti, 08916 Canyet, España -- Av. Meridiana \/ C. Mallorca (sortida ciutat),Avinguda Meridiana 178, Barcelona\nTransfer sólo ida\n\n20\/01\/2020 - 18:00:28 - Parada 1 -- Camí de Can Ruti, 08916 Canyet, España\n20\/01\/2020 - 18:21:28 - Parada 2 -- Av. Meridiana \/ Pg. Fabra i Puig (Forn de Pa - creuat el passeig),Avinguda Meridiana 387\n20\/01\/2020 - 18:29:28 - Parada 3 -- Av. Meridiana (bocana Metro Sagrera),Avinguda Meridiana 288, Barcelona\n20\/01\/2020 - 18:42:28 - Parada 4 -- Av. Meridiana \/ C. Mallorca (sortida ciutat),Avinguda Meridiana 178, Barcelona",
                "cost_if_externalized" => null
            ],
            [
                "id" => 26257974,
                "external_id" => "-26257974",
                "external_budget_id" => "-54",
                "external_route_id" => "-54",
                "track_id" => null,
                "name" => "EL BARQUITO 1",
                "notes" => null,
                "timestamp" => "2021-09-15 00:00:00",
                "arrival_address" => "Av. Meridiana \/ C. Mallorca (sortida ciutat),Avinguda Meridiana 178, Barcelona",
                "arrival_timestamp" => "2021-09-15 18:42:28",
                "departure_address" => "Camí de Can Ruti, 08916 Canyet, España",
                "departure_timestamp" => "2021-09-15 18:00:28",
                "capacity" => 10,
                "confirmed_pax_count" => 0,
                "reported_departure_timestamp" => null,
                "reported_departure_kms" => null,
                "reported_arrival_timestamp" => null,
                "reported_arrival_kms" => null,
                "reported_vehicle_plate_number" => null,
                "status" => -20,
                "status_info" => "{\"driver\": false, \"vehicle\": false, \"readings\": false, \"tracking\": false, \"ended_late\": false, \"play_service\": false, \"started_late\": false, \"stop_service\": false}",
                "reprocess_status" => 0,
                "return" => 0,
                "created" => "2021-09-13 20:28:18",
                "modified" => "2021-09-13 20:30:11",
                "synchronized_downstream" => null,
                "synchronized_upstream" => null,
                "province_id" => 8,
                "sale_tickets_drivers" => 0,
                "notes_drivers" => null,
                "itinerary_drivers" => "Camí de Can Ruti, 08916 Canyet, España -- Av. Meridiana \/ C. Mallorca (sortida ciutat),Avinguda Meridiana 178, Barcelona\nTransfer sólo ida\n\n20\/01\/2020 - 18:00:28 - Parada 1 -- Camí de Can Ruti, 08916 Canyet, España\n20\/01\/2020 - 18:21:28 - Parada 2 -- Av. Meridiana \/ Pg. Fabra i Puig (Forn de Pa - creuat el passeig),Avinguda Meridiana 387\n20\/01\/2020 - 18:29:28 - Parada 3 -- Av. Meridiana (bocana Metro Sagrera),Avinguda Meridiana 288, Barcelona\n20\/01\/2020 - 18:42:28 - Parada 4 -- Av. Meridiana \/ C. Mallorca (sortida ciutat),Avinguda Meridiana 178, Barcelona",
                "cost_if_externalized" => null
            ],
            [
                "id" => 26257975,
                "external_id" => "-26257975",
                "external_budget_id" => "-54",
                "external_route_id" => "-54",
                "track_id" => null,
                "name" => "EL BARQUITO 1",
                "notes" => null,
                "timestamp" => "2021-09-15 00:00:00",
                "arrival_address" => "Av. Meridiana \/ C. Mallorca (sortida ciutat),Avinguda Meridiana 178, Barcelona",
                "arrival_timestamp" => "2021-09-15 18:42:28",
                "departure_address" => "Camí de Can Ruti, 08916 Canyet, España",
                "departure_timestamp" => "2021-09-15 18:00:28",
                "capacity" => 10,
                "confirmed_pax_count" => 0,
                "reported_departure_timestamp" => null,
                "reported_departure_kms" => null,
                "reported_arrival_timestamp" => null,
                "reported_arrival_kms" => null,
                "reported_vehicle_plate_number" => null,
                "status" => 40,
                "status_info" => "{\"driver\": false, \"vehicle\": false, \"readings\": false, \"tracking\": false, \"ended_late\": false, \"play_service\": false, \"started_late\": false, \"stop_service\": false}",
                "reprocess_status" => 0,
                "return" => 0,
                "created" => "2021-09-13 20:28:18",
                "modified" => "2021-09-13 20:30:12",
                "synchronized_downstream" => null,
                "synchronized_upstream" => null,
                "province_id" => 8,
                "sale_tickets_drivers" => 0,
                "notes_drivers" => null,
                "itinerary_drivers" => "Camí de Can Ruti, 08916 Canyet, España -- Av. Meridiana \/ C. Mallorca (sortida ciutat),Avinguda Meridiana 178, Barcelona\nTransfer sólo ida\n\n20\/01\/2020 - 18:00:28 - Parada 1 -- Camí de Can Ruti, 08916 Canyet, España\n20\/01\/2020 - 18:21:28 - Parada 2 -- Av. Meridiana \/ Pg. Fabra i Puig (Forn de Pa - creuat el passeig),Avinguda Meridiana 387\n20\/01\/2020 - 18:29:28 - Parada 3 -- Av. Meridiana (bocana Metro Sagrera),Avinguda Meridiana 288, Barcelona\n20\/01\/2020 - 18:42:28 - Parada 4 -- Av. Meridiana \/ C. Mallorca (sortida ciutat),Avinguda Meridiana 178, Barcelona",
                "cost_if_externalized" => null
            ],
            [
                "id" => 26257976,
                "external_id" => "-26257976",
                "external_budget_id" => "-54",
                "external_route_id" => "-54",
                "track_id" => null,
                "name" => "EL BARQUITO 1",
                "notes" => null,
                "timestamp" => "2021-09-15 00:00:00",
                "arrival_address" => "Av. Meridiana \/ C. Mallorca (sortida ciutat),Avinguda Meridiana 178, Barcelona",
                "arrival_timestamp" => "2021-09-15 18:42:28",
                "departure_address" => "Camí de Can Ruti, 08916 Canyet, España",
                "departure_timestamp" => "2021-09-15 18:00:28",
                "capacity" => 54,
                "confirmed_pax_count" => 0,
                "reported_departure_timestamp" => null,
                "reported_departure_kms" => null,
                "reported_arrival_timestamp" => null,
                "reported_arrival_kms" => null,
                "reported_vehicle_plate_number" => null,
                "status" => 30,
                "status_info" => "{\"driver\": false, \"vehicle\": false, \"readings\": false, \"tracking\": false, \"ended_late\": false, \"play_service\": false, \"started_late\": false, \"stop_service\": false}",
                "reprocess_status" => 0,
                "return" => 0,
                "created" => "2021-09-13 20:28:18",
                "modified" => "2021-09-13 20:30:11",
                "synchronized_downstream" => null,
                "synchronized_upstream" => null,
                "province_id" => 8,
                "sale_tickets_drivers" => 0,
                "notes_drivers" => null,
                "itinerary_drivers" => "Camí de Can Ruti, 08916 Canyet, España -- Av. Meridiana \/ C. Mallorca (sortida ciutat),Avinguda Meridiana 178, Barcelona\nTransfer sólo ida\n\n20\/01\/2020 - 18:00:28 - Parada 1 -- Camí de Can Ruti, 08916 Canyet, España\n20\/01\/2020 - 18:21:28 - Parada 2 -- Av. Meridiana \/ Pg. Fabra i Puig (Forn de Pa - creuat el passeig),Avinguda Meridiana 387\n20\/01\/2020 - 18:29:28 - Parada 3 -- Av. Meridiana (bocana Metro Sagrera),Avinguda Meridiana 288, Barcelona\n20\/01\/2020 - 18:42:28 - Parada 4 -- Av. Meridiana \/ C. Mallorca (sortida ciutat),Avinguda Meridiana 178, Barcelona",
                "cost_if_externalized" => null
            ],
            [
                "id" => 26257977,
                "external_id" => "-26257977",
                "external_budget_id" => "-68",
                "external_route_id" => "-68",
                "track_id" => null,
                "name" => null,
                "notes" => null,
                "timestamp" => "2021-10-04 00:00:00",
                "arrival_address" => "Parque das Nações (Gare Oriente),Parque das Nações (Gare Oriente)",
                "arrival_timestamp" => "2021-10-04 19:06:42",
                "departure_address" => "Campus de Campolide, Lisboa,Campus de Campolide, Lisboa",
                "departure_timestamp" => "2021-10-04 17:22:42",
                "capacity" => 10,
                "confirmed_pax_count" => 0,
                "reported_departure_timestamp" => null,
                "reported_departure_kms" => null,
                "reported_arrival_timestamp" => null,
                "reported_arrival_kms" => null,
                "reported_vehicle_plate_number" => null,
                "status" => 0,
                "status_info" => "{\"driver\": false, \"vehicle\": false, \"readings\": false, \"tracking\": false, \"ended_late\": false, \"play_service\": false, \"started_late\": false, \"stop_service\": false}",
                "reprocess_status" => 0,
                "return" => 1,
                "created" => "2021-10-04 22:18:57",
                "modified" => "2021-10-04 22:18:57",
                "synchronized_downstream" => null,
                "synchronized_upstream" => null,
                "province_id" => 63,
                "sale_tickets_drivers" => 0,
                "notes_drivers" => null,
                "itinerary_drivers" => "Campus de Campolide, Lisboa,Campus de Campolide, Lisboa -- Parque das Nações (Gare Oriente),Parque das Nações (Gare Oriente)\nTransfer sólo ida\n\n20\/01\/2020 - 17:22:42 - Parada 1 -- Campus de Campolide, Lisboa,Campus de Campolide, Lisboa\n20\/01\/2020 - 17:30:42 - Parada 2 -- Sete Rios (Debaixo do Veaduto),Avenida Columbano Bordalo Pinheiro, Lisboa\n20\/01\/2020 - 17:59:42 - Parada 3 -- Nova SBE,Rua da Holanda, Cascais\n20\/01\/2020 - 18:28:42 - Parada 4 -- Park de Autocarro Centro de Colombo,Largo da Revista Militar, Lisboa\n20\/01\/2020 - 18:41:42 - Parada 5 -- Campo Grande,Rua Cipriano Dourado 14, Lisboa\n20\/01\/2020 - 19:06:42 - Parada 6 -- Parque das Nações (Gare Oriente),Parque das Nações (Gare Oriente)",
                "cost_if_externalized" => null
            ],
            [
                "id" => 26257978,
                "external_id" => "-26257978",
                "external_budget_id" => "-68",
                "external_route_id" => "-68",
                "track_id" => null,
                "name" => null,
                "notes" => null,
                "timestamp" => "2021-10-06 00:00:00",
                "arrival_address" => "Parque das Nações (Gare Oriente),Parque das Nações (Gare Oriente)",
                "arrival_timestamp" => "2021-10-06 19:06:42",
                "departure_address" => "Campus de Campolide, Lisboa,Campus de Campolide, Lisboa",
                "departure_timestamp" => "2021-10-06 17:22:42",
                "capacity" => 10,
                "confirmed_pax_count" => 0,
                "reported_departure_timestamp" => null,
                "reported_departure_kms" => null,
                "reported_arrival_timestamp" => null,
                "reported_arrival_kms" => null,
                "reported_vehicle_plate_number" => null,
                "status" => 0,
                "status_info" => "{\"driver\": false, \"vehicle\": false, \"readings\": false, \"tracking\": false, \"ended_late\": false, \"play_service\": false, \"started_late\": false, \"stop_service\": false}",
                "reprocess_status" => 0,
                "return" => 1,
                "created" => "2021-10-04 22:18:57",
                "modified" => "2021-10-04 22:18:57",
                "synchronized_downstream" => null,
                "synchronized_upstream" => null,
                "province_id" => 63,
                "sale_tickets_drivers" => 0,
                "notes_drivers" => null,
                "itinerary_drivers" => "Campus de Campolide, Lisboa,Campus de Campolide, Lisboa -- Parque das Nações (Gare Oriente),Parque das Nações (Gare Oriente)\nTransfer sólo ida\n\n20\/01\/2020 - 17:22:42 - Parada 1 -- Campus de Campolide, Lisboa,Campus de Campolide, Lisboa\n20\/01\/2020 - 17:30:42 - Parada 2 -- Sete Rios (Debaixo do Veaduto),Avenida Columbano Bordalo Pinheiro, Lisboa\n20\/01\/2020 - 17:59:42 - Parada 3 -- Nova SBE,Rua da Holanda, Cascais\n20\/01\/2020 - 18:28:42 - Parada 4 -- Park de Autocarro Centro de Colombo,Largo da Revista Militar, Lisboa\n20\/01\/2020 - 18:41:42 - Parada 5 -- Campo Grande,Rua Cipriano Dourado 14, Lisboa\n20\/01\/2020 - 19:06:42 - Parada 6 -- Parque das Nações (Gare Oriente),Parque das Nações (Gare Oriente)",
                "cost_if_externalized" => null
            ],
        ]);
    }
}