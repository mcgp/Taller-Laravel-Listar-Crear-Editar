<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\MascotasSeeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
           //Registros inciales de mascotas
           DB::table('mascotas')->insert([
            'nombre' => 'Seeder pet I',
            'edad' => 5,
            'especie' => 'Gato',
            'raza' => 'Criollo',
            'peso' => 5,
            'vacunada' => true,
            'pronostico' => 'Bueno',

        ]);

        DB::table('mascotas')->insert([
            'nombre' => 'Seeder pet II',
            'edad' => 2,
            'especie' => 'Perro',
            'raza' => 'Poodle',
            'peso' => 7,
            'vacunada' => false,
            'pronostico' => 'En observacion',
        ]);


        $this->call([
            MascotasSeeder::class
            
        ]);

     
        
    }
}
