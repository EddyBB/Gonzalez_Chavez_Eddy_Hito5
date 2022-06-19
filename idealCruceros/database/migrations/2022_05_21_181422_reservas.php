<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Reservas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function(Blueprint $table){
            $table->engine="InnoDB";
            $table->id('id_reserva');
            $table->bigInteger('id_usuario')->unsigned();
            $table->bigInteger('id_crucero')->unsigned();
            $table->date('fecha_reserva');
            $table->integer('personas');
            $table->float('precio_final');
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
        Schema::dropIfExists('reservas');
    }
}
