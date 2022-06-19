<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tripulacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tripulacion', function(Blueprint $table){

            $table->engine="InnoDB";
            $table->id('id_tripulante');
            $table->bigInteger('id_usuario')->unsigned();
            $table->bigInteger('id_crucero')->unsigned();
            $table->string('funcion');
            $table->timestamps();

            $table->foreign('id_usuario')->references('id_usuario')->on('users')->onDelete("cascade");
            $table->foreign('id_crucero')->references('id_crucero')->on('cruceros')->onDelete("cascade");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tripulacion');
    }
}
