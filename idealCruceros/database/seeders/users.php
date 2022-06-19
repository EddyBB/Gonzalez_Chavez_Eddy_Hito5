<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
            "name" => "Eddy",
            "email" => "eddy@gmail.com",
            "password" => Hash::make("administrador"),
            "dni" => "21574135T",
            "fechaNaci" => "1993/10/26",
            "numTlf" => 698785245,
            "rol" => 'admin'
        ]);

        DB::table("users")->insert([
            "name" => "Rodolfo",
            "email" => "rodolfo@gmail.com",
            "password" => Hash::make("administrador"),
            "dni" => "21256544F",
            "fechaNaci" => "1998/02/02",
            "numTlf" => 369789654
        ]);

        DB::table("users")->insert([
            "name" => "Pepita",
            "email" => "pepita@gmail.com",
            "password" => Hash::make("administrador"),
            "dni" => "21365478H",
            "fechaNaci" => "1999/04/04",
            "numTlf" => 698789632
        ]);
        DB::table("users")->insert([
            "name" => "Maria",
            "email" => "maria@gmail.com",
            "password" => Hash::make("administrador"),
            "dni" => "23645698L",
            "fechaNaci" => "1992/01/03",
            "numTlf" => 654123852
        ]);

        DB::table("users")->insert([
            "name" => "Luisa",
            "email" => "luisa@gmail.com",
            "password" => Hash::make("administrador"),
            "dni" => "25478963R",
            "fechaNaci" => "1995/05/05",
            "numTlf" => 321852862
        ]);

        DB::table("users")->insert([
            "name" => "Nicolas",
            "email" => "nicolas@gmail.com",
            "password" => Hash::make("administrador"),
            "dni" => "21478954S",
            "fechaNaci" => "1992/06/03",
            "numTlf" => 654258753
        ]);

        DB::table("users")->insert([
            "name" => "Margarita",
            "email" => "margarita@gmail.com",
            "password" => Hash::make("administrador"),
            "dni" => "78945612V",
            "fechaNaci" => "1990/09/12",
            "numTlf" => 456258357
        ]);

        DB::table("users")->insert([
            "name" => "Pepito",
            "email" => "pepito@gmail.com",
            "password" => Hash::make("administrador"),
            "dni" => "32194312B",
            "fechaNaci" => "1991/01/23",
            "numTlf" => 658963654
        ]);

        DB::table("users")->insert([
            "name" => "Josefina",
            "email" => "josefina@gmail.com",
            "password" => Hash::make("administrador"),
            "dni" => "56432158Y",
            "fechaNaci" => "1980/02/05",
            "numTlf" => 987456258
        ]);

        DB::table("users")->insert([
            "name" => "Javi",
            "email" => "javi@gmail.com",
            "password" => Hash::make("administrador"),
            "dni" => "25815975X",
            "fechaNaci" => "1900/12/21",
            "numTlf" => 987654321
        ]);

        DB::table("users")->insert([
            "name" => "Marta",
            "email" => "marta@gmail.com",
            "password" => Hash::make("administrador"),
            "dni" => "12121212H",
            "fechaNaci" => "1999/01/01",
            "numTlf" => 987654321
        ]);

        DB::table("users")->insert([
            "name" => "Antonio",
            "email" => "antonio@gmail.com",
            "password" => Hash::make("administrador"),
            "dni" => "32659821T",
            "fechaNaci" => "2000/05/15",
            "numTlf" => 784512369
        ]);
    }
}
