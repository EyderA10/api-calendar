<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('external_id');
            $table->string('external_budget_id');
            $table->string('external_route_id');
            $table->integer('track_id')->nullable();
            $table->string('name')->nullable();
            $table->text('notes')->nullable();
            $table->timestamp('timestamp')->nullable();
            $table->text('arrival_address');
            $table->timestamp('arrival_timestamp')->nullable();
            $table->text('departure_address');
            $table->timestamp('departure_timestamp')->nullable();
            $table->integer('capacity');
            $table->integer('confirmed_pax_count')->nullable()->default(0);
            $table->timestamp('reported_departure_timestamp')->nullable();
            $table->integer('reported_departure_kms')->nullable();
            $table->timestamp('reported_arrival_timestamp')->nullable();
            $table->integer('reported_arrival_kms')->nullable();
            $table->integer('reported_vehicle_plate_number')->nullable();
            $table->integer('status')->nullable();
            $table->json('status_info')->nullable();
            $table->boolean('reprocess_status')->default(false);
            $table->boolean('return')->default(0);
            $table->timestamp('created')->nullable();
            $table->timestamp('modified')->nullable();
            $table->string('synchronized_downstream')->nullable();
            $table->string('synchronized_upstream')->nullable();
            $table->integer('province_id')->nullable();
            $table->integer('sale_tickets_drivers');
            $table->text('notes_drivers')->nullable();
            $table->text('itinerary_drivers');
            $table->string('cost_if_externalized')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
