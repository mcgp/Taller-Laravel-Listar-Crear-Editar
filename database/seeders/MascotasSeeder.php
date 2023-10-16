<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;

class MascotasSeeder extends Seeder
{
    public function run()
    {
        // Desde aqui puedo generar N registros, antes eran 100, ahora seran 20
        Factory::factoryForModel(\App\Mascota::class)->count(20)->create();

    }
}
