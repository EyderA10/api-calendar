<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('picture')->nullable();
            $table->string('email')->unique();
            $table->string('password')->nullable();
            $table->timestamp('last_online')->nullable();
            $table->string('verification_code')->nullable();
            $table->string('new_email')->nullable();
            $table->integer('status')->nullable()->default(0);
            $table->boolean('first')->nullable()->default(false);
            $table->date('last_accept_date')->nullable();
            $table->timestamp('created')->nullable();
            $table->timestamp('modified')->nullable();
            $table->string('company_contact')->nullable();
            $table->double('credits')->nullable()->default(0);
            $table->double('first_trip')->nullable()->default(0);
            $table->boolean('incomplete_profile')->nullable()->default(false);
            $table->boolean('phone_verify')->nullable()->default(false);
            $table->string('token_auto_login')->nullable();
            $table->string('user_vertical')->nullable();
            $table->integer('language_id')->nullable();
            $table->boolean('no_registered')->nullable()->default(false);
            $table->rememberToken();
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
