<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_plan_id');
            $table->unsignedBigInteger('routes_id');
            $table->integer('track_id')->nullable();
            $table->timestamp('reservation_start')->nullable();
            $table->timestamp('reservation_end')->nullable();
            $table->integer('route_stop_origin_id');
            $table->integer('route_stop_destination_id');
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();

            $table->foreign('user_plan_id')->references('id')->on('user_plans');
            $table->foreign('routes_id')->references('id')->on('routes');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}
