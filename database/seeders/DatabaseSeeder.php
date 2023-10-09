<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\MascotasSeeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            MascotasSeeder::class
        ]);
    }
}
