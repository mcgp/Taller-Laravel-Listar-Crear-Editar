<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory; // Asegúrate de importar Factory

class MascotasSeeder extends Seeder
{
    public function run()
    {
        // Utiliza la fábrica para crear 100 registros de mascotas
        Factory::factoryForModel(\App\Mascota::class)->count(100)->create();
    }
}
