<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(users::class);
        $this->call(cruceros::class);
        $this->call(reservas::class);
        $this->call(actividades::class);
        $this->call(tripulacion::class);
        // \App\Models\User::factory(10)->create();
    }
}
