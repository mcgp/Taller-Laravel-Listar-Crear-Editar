<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mascota;


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
        //Almacenar mascota recien creada
        $mascota = new Mascota();
        $mascota->nombre = $request->input('nombre');
        $mascota->especie = $request->input('especie');
        $mascota->raza = $request->input('raza');
        $mascota->edad = $request->input('edad');
        $mascota->peso = $request->input('peso');
        // Verificar si el campo "vacunado" se envió en el formulario
    // Si no se envió, establecerlo como falso (no vacunado)
        $mascota->vacunada = $request->input('vacunado', false);
        $mascota->fecha_nacimiento = $request->input('fecha_nacimiento');

        $mascota->save();

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
        //Actualizaicon de mascota
        $mascota = Mascota::findOrFail($id);
        $mascota->nombre = $request->input('nombre');
        $mascota->especie = $request->input('especie');
        $mascota->raza = $request->input('raza');
        $mascota->edad = $request->input('edad');
        $mascota->peso = $request->input('peso');
        // Si no se envió, establecerlo como falso (no vacunado)
        $mascota->vacunada = $request->has('vacunado') ? true : false;

        $mascota->fecha_nacimiento = $request->input('fecha_nacimiento');


        $mascota->save();


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
