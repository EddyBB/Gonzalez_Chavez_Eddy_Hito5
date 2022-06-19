<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class cruceros extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("cruceros")->insert([
            "nombre" => "MSC Armonia",
            "fecha_inicio" => "2022/01/01",
            "fecha_fin" => "2022/01/6",
            "puerto_origen" => "Brindisi/Lecce, Italia",
            "puerto_fin" => "Brindisi/Lecce, Italia",
            "descripcion" => "Esta fecha de salida es Crucero Muévete! con actividades especiales a bordo,guía asistente y excursiones opcionales en español. ¿Te lo vas a perder?",
            "precio" => 669,
            "img_crucero" => "armonia.jpg"
        ]);

        DB::table("cruceros")->insert([
            "nombre" => "MSC Lirica",
            "fecha_inicio" => "2022/02/02",
            "fecha_fin" => "2022/02/7",
            "puerto_origen" => "Pireo/Grecia",
            "puerto_fin" => "Pireo/Grecia",
            "descripcion" => "¿Cansado de estar en casa? ¿Te apetece salir y disfrutar del verano a tope? Embárcate en nuestro CRUCERO MUÉVETE!, un crucero con actividades llenas de energía y diversión como zumba, clases de salsa, karaoke, fiestas temáticas y mucho, mucho más.",
            "precio" => 669,
            "img_crucero" => "lirica.jpg"
        ]);

        DB::table("cruceros")->insert([
            "nombre" => "MSC Meraviglia",
            "fecha_inicio" => "2022/03/03",
            "fecha_fin" => "2022/03/8",
            "puerto_origen" => "Génova, Italia",
            "puerto_fin" => "Génova, Italia",
            "descripcion" => "Un crucero con Excursiones Opcionales en Español y Guía Asistente.Y ahora también con opción de añadir VUELO + TRASLADO + SEGURO durante el proceso de compra ¡No dejes pasar esta oportunidad y vente a disfrutar del verano con nosotros!",
            "precio" => 880,
            "img_crucero" => "meraviglia.jpg"
        ]);

        DB::table("cruceros")->insert([
            "nombre" => "MSC Seaview",
            "fecha_inicio" => "2022/04/04",
            "fecha_fin" => "2022/04/9",
            "puerto_origen" => "Nápoles, Italia",
            "puerto_fin" => "Nápoles, Italia",
            "descripcion" => "¿Ver Nápoles y morir? ¡Nosotros te devolvemos sano y salvo a bordo de nuestro crucero! Pero no te pierdas ninguna de sus bellezas: de Spaccanapoli a la Plaza del Plebiscito, de la misteriosa estatua del Cristo Velato a los animadísimos Quartieri Spagnoli",
            "precio" => 900,
            "img_crucero" => "seaview.jpg"
        ]);

        DB::table("cruceros")->insert([
            "nombre" => "MSC Seaside",
            "fecha_inicio" => "2022/05/05",
            "fecha_fin" => "2022/05/10",
            "puerto_origen" => "Palermo, Italia",
            "puerto_fin" => "Palermo, Italia",
            "descripcion" => "Durante tu crucero por el Mediterráneo ¡Palermo te espera! Déjate abrumar por la fascinación árabe y normanda de la arquitectura y piérdete entre los aromas del mercado de Ballarò mientras paseas con un granizado en la mano.",
            "precio" => 600,
            "img_crucero" => "seaside.jpg"
        ]);

        DB::table("cruceros")->insert([
            "nombre" => "MSC Splendida",
            "fecha_inicio" => "2022/06/06",
            "fecha_fin" => "2022/06/11",
            "puerto_origen" => "Siracusa, Italia",
            "puerto_fin" => "Siracusa, Italia",
            "descripcion" => "Ve de compras a las antiguas boutiques, explora el mercado tradicional o saborea un Pastis al aire libre. Y después, mar; mar casi por todas partes, para navegar y llegar a calas o a las fantásticas islas Frioul. ",
            "precio" => 669,
            "img_crucero" => "splendida.jpg"
        ]);
    }
}
