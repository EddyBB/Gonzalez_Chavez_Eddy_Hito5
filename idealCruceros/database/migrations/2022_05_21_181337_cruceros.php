<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cruceros extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cruceros', function(Blueprint $table){

            $table->engine="InnoDB";
            $table->id('id_crucero');
            $table->string('nombre');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->string('puerto_origen');
            $table->string('puerto_fin');
            $table->string('descripcion');
            $table->float('precio');
            $table->string('img_crucero');
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
        Schema::dropIfExists('cruceros');
    }
}
