<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class reservas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("reservas")->insert([
            "id_usuario" => 2,
            "id_crucero" => 2,
            "fecha_reserva" => "2021/12/1",
            "personas" => 2,
            "precio_final" => 399
        ]);

        DB::table("reservas")->insert([
            "id_usuario" => 3,
            "id_crucero" => 3,
            "fecha_reserva" => "2021/09/02",
            "personas" => 1,
            "precio_final" => 699
        ]);

        DB::table("reservas")->insert([
            "id_usuario" => 4,
            "id_crucero" => 4,
            "fecha_reserva" => "2021/07/22",
            "personas" => 3,
            "precio_final" => 2000
        ]);

        DB::table("reservas")->insert([
            "id_usuario" => 4,
            "id_crucero" => 5,
            "fecha_reserva" => "2021/05/15",
            "personas" => 2,
            "precio_final" => 700
        ]);

        DB::table("reservas")->insert([
            "id_usuario" => 3,
            "id_crucero" => 6,
            "fecha_reserva" => "2022/01/01",
            "personas" => 2,
            "precio_final" => 700
        ]);
    }
}
