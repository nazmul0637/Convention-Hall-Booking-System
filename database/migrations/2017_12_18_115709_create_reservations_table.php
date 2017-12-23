<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->integer('venue_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('foodmenu_id')->unsigned();
            $table->integer('total_guest');
            $table->integer('total_amount');
            $table->date('reservations_date');
            $table->integer('reservation_time_slot');
            $table->string('payment_id')->default(NULL);
            $table->integer('approved')->default(0);
            $table->string('special_requirement');
            $table->timestamps();
            $table->foreign('venue_id')->references('id')->on('venues')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('foodmenu_id')->references('id')->on('foodmenus')->onDelete('CASCADE')->onUpdate('CASCADE');
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
