<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('camps', function (Blueprint $table) {
            $table->increments('id');
            $table->string('activities');
            $table->string('address');
            $table->integer('bonfire');
            $table->string('business_hours');
            $table->string('institution_type');
            $table->boolean('is_card_payment');
            $table->boolean('is_charter');
            $table->boolean('is_cooking_room');
            $table->boolean('is_cottage');
            $table->boolean('is_fireworks');
            $table->boolean('is_parking');
            $table->boolean('is_pet');
            $table->boolean('is_power_supply');
            $table->boolean('is_restroom');
            $table->boolean('is_shower');
            $table->boolean('is_store');
            $table->boolean('is_vending_machine');
            $table->boolean('is_water_place');
            $table->boolean('is_wifi');
            $table->string('name');
            $table->text('note');
            $table->integer('prefecture_id');
            $table->string('price');
            $table->string('regular_closing_day');
            $table->string('rental_goods');
            $table->integer('reserve_type');
            $table->string('site_url');
            $table->integer('stay_type');
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
        Schema::dropIfExists('camps');
    }
}
