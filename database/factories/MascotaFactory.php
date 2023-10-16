<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Mascota;

class MascotaFactory extends Factory
{
    /**
     * El nombre del modelo asociado a la fábrica.
     *
     * @var string
     */
    protected $model = Mascota::class;

    /**
     * Define el estado por defecto del modelo.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name, // Genera un nombre aleatorio
            'edad' => $this->faker->numberBetween(1, 15), // Genera una edad aleatoria entre 1 y 15
            'especie' => $this->faker->randomElement(['Perro', 'Gato']),
             // Elige aleatoriamente un tipo de mascota
             'raza' => $this->faker->randomElement(['Criollo', 'Naranja', 'Real', 'Poodle',
                                                    'Bengala','Siamés','Persa','Siberiano',
                                                    'Bóxer','Pastor Alemán','Labrador',
                                                    'Golden Retriever','Pitbull','Bulldog',
                                                    'Chihuahua','Pug','Bengali',
                                                    'Himalya','Pastor Belga',
                                                    'Pastor Australiano','Azul ruso',
                                                    'Salvaje', 'Colie','Angora']),
            // Elige aletoriamente entre razas posibles de estos animales
             'peso' => $this->faker->numberBetween(2, 12), // Genera una edad aleatoria entre 1 y 15
             'vacunada' => $this->faker->boolean, // Genera un valor  (true o false) para indicar si está vacunado
                //'pronostico' => $this->faker->randomElement(['Bueno', 'En observacion', 'Reservado']),
                'pronostico' => $this->faker->randomElement(['Bueno', 'En observacion', 'Reservado']),

                // Elige aleatoriamente un pronóstico




        ];
    }
}
