<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoutesDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routes_data', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('routes_id');
            $table->unsignedBigInteger('calendar_id');
            $table->string('vinculation_route')->nullable();
            $table->integer('route_circular')->nullable()->default(0);
            $table->timestamp('date_init')->nullable();
            $table->timestamp('date_finish')->nullable();
            $table->boolean('mon');
            $table->boolean('tue');
            $table->boolean('wed');
            $table->boolean('thu');
            $table->boolean('fri');
            $table->boolean('sat');
            $table->boolean('sun');
            $table->timestamps();

            $table->foreign('routes_id')->references('id')->on('routes');
            $table->foreign('calendar_id')->references('id')->on('calendar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('routes_data');
    }
}
