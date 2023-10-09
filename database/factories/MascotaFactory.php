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
            'especie' => $this->faker->randomElement(['Perro', 'Gato']), // Elige aleatoriamente un tipo de mascota
             'raza' => $this->faker->randomElement(['Criollo', 'Naranja',
             'Siames', 'Salvaje', 'Colie','Angora']), // Elige aletoriamente entre razas posibles de estos animales
             'peso' => $this->faker->numberBetween(2, 12), // Genera una edad aleatoria entre 1 y 15
             'fecha_nacimiento' => $this->faker->date, // Genera una fecha de nacimiento aleatoria
             'vacunada' => $this->faker->boolean, // Genera un valor  (true o false) para indicar si está vacunado


        ];
    }
}
