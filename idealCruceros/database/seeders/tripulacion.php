<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class tripulacion extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("tripulacion")->insert([
            "id_usuario" => 5,
            "id_crucero" => 2,
            "funcion" => "Dj"
        ]);

        DB::table("tripulacion")->insert([
            "id_usuario" => 6,
            "id_crucero" => 4,
            "funcion" => "Cocinero Ala B"
        ]);

        DB::table("tripulacion")->insert([
            "id_usuario" => 7,
            "id_crucero" => 2,
            "funcion" => "Camarero"
        ]);

        DB::table("tripulacion")->insert([
            "id_usuario" => 7,
            "id_crucero" => 4,
            "funcion" => "Limpiador"
        ]);

        DB::table("tripulacion")->insert([
            "id_usuario" => 8,
            "id_crucero" => 3,
            "funcion" => "Mecanico"
        ]);
    }
}
