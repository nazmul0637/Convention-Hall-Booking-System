<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConventionHallsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('convention_halls', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('manager_id')->unsigned();
            $table->string('name');
            $table->string('address');
            $table->string('description');
            $table->string('contact');
            $table->string('Num_of_hall');
            $table->string('Num_of_food_type');
            $table->string('payment');
            $table->string('terms_and_conditions');
            $table->string('note');
            $table->timestamps();
            $table->foreign('manager_id')->references('id')->on('users')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('convention_halls');
    }
}
