<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodmenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foodmenus', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('convention_hall_id')->unsigned();
            $table->string('name');
            $table->string('food_type');
            $table->string('item_details');
            $table->string('price_per_head');
            $table->timestamps();
            $table->foreign('convention_hall_id')->references('id')->on('convention_halls')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foodmenus');
    }
}
