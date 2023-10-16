<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mascota;
use App\Http\Requests\MascotaRequest; // Importamos nuestro  MascotaRequest
use Illuminate\Support\Facades\Log;

class MascotasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //lista de mascotas
        $mascotas = Mascota::all();

        return view('mascotas.index', compact('mascotas'));
    }

    /**
     * Show the form for creating a new .
     */
    public function create()
    {
        //Crear mascota
        return view('mascotas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // Validar los datos directamente en el controlador
        $request->validate([
            'nombre' => 'required|string|max:100',
            'especie' => 'required|string|max:10',
            'raza' => 'required|string|max:20',
            'edad' => 'required|integer|min:1|max:20',
            'peso' => 'required|numeric|min:0.01|max:100.0',
            'vacunada' => 'required|boolean',
            'pronostico' => 'required',
        ]);

    
        // Convierte el valor 'true' en un booleano
        $vacunada = $request->input('vacunada') == 'true';
    
        // Actualiza el valor de 'vacunada' en la solicitud
        $request->merge(['vacunada' => $vacunada]);
    
        try {
            // Almacenar la mascota recién creada
            Mascota::create($request->all());
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->withErrors(['error' => 'Hubo un error al guardar la mascota.']);
        }
    
        return redirect()->route('mascotas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $mascota = Mascota::findOrFail($id);

        return view('mascotas.show', compact('mascota'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mascota $mascota)
    {
        //Editar mascota
        // La variable $mascota contendrá la instancia de la mascota automáticamente
        return view('mascotas.edit', compact('mascota'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        // Validar los datos directamente en el controlador
        $request->validate([
            'nombre' => 'required|string|max:100',
            'especie' => 'required|string|max:10',
            'raza' => 'required|string|max:20',
            'edad' => 'required|integer|min:1|max:20',
            'peso' => 'required|numeric|min:0.01|max:100.0',
            'vacunada' => 'required|boolean',
            'pronostico' => 'required',
        ]);

    // Actualización de mascota
    $mascota = Mascota::findOrFail($id);
    
    // Convierte el valor 'true' en un booleano
    $vacunada = $request->input('vacunada') == 'true';
    
    // Actualiza el valor de 'vacunada' en la solicitud
    $request->merge(['vacunada' => $vacunada]);

    try {
        $mascota->update($request->all());
    } catch (\Exception $e) {
        return redirect()->back()->withInput()->withErrors(['error' => 'Hubo un error al actualizar la mascota.']);
    }

    return redirect()->route('mascotas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //Eliminar mascota
        
        $mascota = Mascota::findOrFail($id);
        $mascota->delete();


        return redirect()->route('mascotas.index');
    }
}
