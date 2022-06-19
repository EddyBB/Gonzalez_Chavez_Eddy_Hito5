<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Actividades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividades', function(Blueprint $table){
            $table->engine="InnoDB";
            $table->id('id_actividades');
            $table->bigInteger('id_crucero')->unsigned();
            $table->string('tematica');
            $table->string('horario_actividad');
            $table->string('descripcion');
            $table->timestamps();

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
        Schema::dropIfExists('actividades');
    }
}
