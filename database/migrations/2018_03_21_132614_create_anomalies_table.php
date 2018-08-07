<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnomaliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anomalies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('libelle');
            $table->string('description');
            $table->string('consequence');
            $table->enum('gravite', ['faible', 'moyenne', 'blocante']);
            $table->timestamps();

            $table->integer('client_id')->unsigned();
            $table->foreign('client_id')
                    ->references('id')
                    ->on('users');

            $table->integer('correcteur_id')->unsigned();
            $table->foreign('correcteur_id')
                ->references('id')
                ->on('users');

            $table->integer('logiciel_id')->unsigned();
            $table->foreign('logiciel_id')
                ->references('id')
                ->on('logiciels');

            $table->integer('type_anomalie_id')->unsigned();
            $table->foreign('type_anomalie_id')
                ->references('id')
                ->on('type_anomalies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anomalie');
    }
}
