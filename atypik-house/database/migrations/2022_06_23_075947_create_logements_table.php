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
        Schema::create('logements', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('categorie_id')->unsigned();
            $table->foreign('categorie_id')->references('id')->on('categorie_logements');
            $table->bigInteger('hebergeur_id')->unsigned();
            $table->foreign('hebergeur_id')->references('id')->on('hebergeurs');
            $table->string('nom',64);
            $table->string('image',64);
            $table->integer('capacite');
            $table->string('adresse',50);
            $table->string('code_postal',10);
            $table->string('ville',50);
            $table->string('pays',30);
            $table->text('particularite',255);
            $table->integer('superficie');
            $table->double('prix_jour',8,2);
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
        Schema::dropIfExists('logements');
    }
};
