<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEtatAnomaliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etat_anomalies', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('statut');
            $table->timestamps();

            $table->integer('anomalie_id')->unsigned();
            $table->foreign('anomalie_id')
                ->references('id')
                ->on('anomalies');

            $table->integer('etat_id')->unsigned();
            $table->foreign('etat_id')
                ->references('id')
                ->on('etats');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('etat_anomalies');
    }
}
