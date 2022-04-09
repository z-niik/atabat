<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->string('name_start_day');
            $table->date('start_day');
            $table->string('type_going');
            $table->string('type_return');
            $table->string('type_plan');
            $table->string('type_code');
            $table->string('price');
            $table->string('state');
            $table->string('city');
            $table->string('kargozar');
            $table->integer('group');
            $table->integer('execute_code');
            $table->string('execute_name');
            $table->string('hotel_najaf');
            $table->string('hotel_karbala');
            $table->string('hotel_kazemain');
            $table->string('address');

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
        Schema::dropIfExists('tours');
    }
}
