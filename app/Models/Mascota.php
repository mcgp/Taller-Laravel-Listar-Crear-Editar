<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{

    use HasFactory;

    protected $fillable = [
        'nombre',
        'especie',
        'raza',
        'edad',
        'peso',
        'vacunada',
        'pronostico',
       
    ];

    protected static $enum = [
        'pronostico' => ['Bueno', 'En observacion', 'Reservado'],
    ];
    
    // Devuelve todas las opciones disponibles
    public static function getPronosticoOptions()
    {
        return collect(self::$enum['pronostico']);
    }
    
    // Obtener la opción seleccionada
    public static function getPronostico($value)
    {
        return self::getPronosticoOptions()->get($value);
    }
}
