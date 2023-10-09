@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mt-5">Agregar Mascota</h1>
    
        <form action="{{ route('mascotas.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="especie">Especie:</label>
                <input type="text" name="especie" id="especie" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="raza">Raza:</label>
                <input type="text" name="raza" id="raza" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="edad">Edad:</label>
                <input type="number" name="edad" id="edad" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="peso">Peso:</label>
                <input type="number" step="0.01" name="peso" id="peso" class="form-control" required>
            </div>
            <div class="form-check">
                <input type="checkbox" name="vacunado" id="vacunado" class="form-check-input" value="1">
                <label for="vacunado" class="form-check-label">Vacunado</label>
            </div>
            <div class="form-group">
                <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
                <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
@endsection
