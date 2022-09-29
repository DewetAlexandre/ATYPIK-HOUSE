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
        Schema::create('restaurations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('logement_id')->unsigned();
            $table->foreign('logement_id')->references('id')->on('logements');
            $table->string('posibilite_rest');
            $table->float('prix_personne_rest',5,2);
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
        Schema::dropIfExists('restaurations');
    }
};
