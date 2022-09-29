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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('reservation_id')->unsigned();
            $table->foreign('reservation_id')->references('id')->on('reservations');
            $table->bigInteger('restauration_id')->unsigned()->nullable();
            $table->foreign('restauration_id')->references('id')->on('restaurations');
            $table->bigInteger('conciergerie_id')->unsigned()->nullable();
            $table->foreign('conciergerie_id')->references('id')->on('conciergeries');
            $table->bigInteger('type_service_id')->unsigned();
            $table->foreign('type_service_id')->references('id')->on('types_services');
            $table->integer('personnes_restau');
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
        Schema::dropIfExists('services');
    }
};
