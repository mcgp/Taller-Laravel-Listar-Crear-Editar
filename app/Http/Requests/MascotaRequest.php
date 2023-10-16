<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Models\Mascota;

class MascotaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
         // Accede a las opciones de pronóstico desde el modelo Mascota
        //$pronosticoOptions = Mascota::getPronosticoOptions();

        return [
            //
            'nombre' => 'required|string|max:100',
            'especie' => 'required|string|max:10',
            'raza' => 'required|string|max:20',
            'edad' => 'required|integer|min:1|max:20',
            'peso' => 'required|numeric|min:0.01|max:100.0',
            'vacunada' => 'required|boolean',
            'pronostico' => 'required',
        ];
    }
}
