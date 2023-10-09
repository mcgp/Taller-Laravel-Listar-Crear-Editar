@extends('layouts.app')

@section('content')
    <h1>Editar Mascota</h1>
    
    <form action="{{ route('mascotas.update', $mascota->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $mascota->nombre }}" required>
        </div>
        <div class="form-group">
            <label for="especie">Especie:</label>
            <input type="text" name="especie" id="especie" class="form-control" value="{{ $mascota->especie }}" required>
        </div>
        <div class="form-group">
            <label for="raza">Raza:</label>
            <input type="text" name="raza" id="raza" class="form-control" value="{{ $mascota->raza }}" required>
        </div>
        <div class="form-group">
            <label for="edad">Edad:</label>
            <input type="number" name="edad" id="edad" class="form-control" value="{{ $mascota->edad }}" required>
        </div>
        <div class="form-group">
            <label for="peso">Peso:</label>
            <input type="number" step="0.01" name="peso" id="peso" class="form-control" value="{{ $mascota->peso }}" required>
        </div>
        <div class="form-check">
            <input type="checkbox" name="vacunado" id="vacunado" class="form-check-input" {{ $mascota->vacunado ? 'checked' : '' }}>
            <label for="vacunado" class="form-check-label">Vacunado</label>
        </div>
        <div class="form-group">
            <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
            <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control" value="{{ $mascota->fecha_nacimiento }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@endsection
