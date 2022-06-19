<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class actividades extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("actividades")->insert([
            "id_crucero" => 2,
            "tematica" => "Fiesta Ibizenca",
            "horario_actividad" => "de 12 am, a 7 am",
            "descripcion" => "Fiesta donde se reunen todos los del barco!"
        ]);

        DB::table("actividades")->insert([
            "id_crucero" => 3,
            "tematica" => "Teatro para niños",
            "horario_actividad" => "de 10 am, a 1 pm",
            "descripcion" => "Representación de teatro don quijote"
        ]);

        DB::table("actividades")->insert([
            "id_crucero" => 4,
            "tematica" => "Cine Verano",
            "horario_actividad" => "de 8 pm, a 1 am",
            "descripcion" => "Serie de peliculas veraniegas"
        ]);

        DB::table("actividades")->insert([
            "id_crucero" => 5,
            "tematica" => "Fiesta de disfraces",
            "horario_actividad" => "de 10 am, a 5 am",
            "descripcion" => "Fiesta de disfraces, ven de tu personaje favorito!"
        ]);

        DB::table("actividades")->insert([
            "id_crucero" => 6,
            "tematica" => "Competición de baile",
            "horario_actividad" => "de 9 pm, a 2 am",
            "descripcion" => "Concurso de baile, saca a bailar a tu pareja y a ganar!"
        ]);
    }
}
