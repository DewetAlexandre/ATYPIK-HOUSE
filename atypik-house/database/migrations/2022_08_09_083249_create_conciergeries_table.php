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
        Schema::create('conciergeries', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('logement_id')->unsigned();
            $table->foreign('logement_id')->references('id')->on('logements');
            $table->string('posibilite_conc');
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
        Schema::dropIfExists('conciergeries');
    }
};
