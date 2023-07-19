<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserPlans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_plans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->integer('currency_id');
            $table->integer('next_user_plan_id')->nullable();
            $table->timestamp('start_timestamp')->nullable();
            $table->timestamp('end_timestamp')->nullable();
            $table->timestamp('renewal_timestamp')->nullable();
            $table->double('renewal_price')->nulslable()->default(0);
            $table->integer('requires_invoice')->nullable()->default(0);
            $table->integer('status')->nullable()->default(0);
            $table->timestamp('created')->nullable();
            $table->timestamp('modified')->nullable();
            $table->integer('financiation')->nullable()->default(0);
            $table->boolean('status_financiation')->nullable()->default(0);
            $table->string('language')->nullable();
            $table->string('nif')->nullable();
            $table->string('business_name')->nullable();
            $table->boolean('pending_payment')->nullable();
            $table->date('date_max_payment')->nullable();
            $table->timestamp('proxim_start_timestamp')->nullable();
            $table->timestamp('proxim_end_timestamp')->nullable();
            $table->timestamp('proxim_renewal_timestamp')->nullable();
            $table->double('proxim_renewal_price')->nullable();
            $table->float('credits_return')->nullable()->default(0.0);
            $table->integer('company_id')->nullable();
            $table->boolean('cancel_employee')->nullable()->default(false);
            $table->boolean('force_renovation')->nullable()->default(false);
            $table->date('date_canceled')->nullable();
            $table->double('amount_confirm_canceled')->nullable();
            $table->double('credit_confirm_canceled')->nullable();
            $table->integer('cost_center_id')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_plans');
    }
}
