<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('factory');
            $table->string('departure_station');
            $table->string('arrived_station');
            $table->time('departure_time');
            $table->time('arrived_time');
            $table->string('train_code');
            $table->tinyInteger('carriages');
            $table->tinyInteger('in_time');
            $table->tinyInteger('cancelled');
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
        Schema::dropIfExists('trains');
    }
};
