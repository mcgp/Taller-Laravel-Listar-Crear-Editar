@extends('layouts.app')

@section('content')
    <h1>Detalles de la Mascota</h1>
    
    <p><strong>Nombre:</strong> {{ $mascota->nombre }}</p>
    <p><strong>Especie:</strong> {{ $mascota->especie }}</p>
    <p><strong>Raza:</strong> {{ $mascota->raza }}</p>
    <p><strong>Edad:</strong> {{ $mascota->edad }}</p>
    <p><strong>Peso:</strong> {{ $mascota->peso }}</p>
    <p><strong>Vacunada:</strong> {{ $mascota->vacunada ? 'Sí' : 'No' }}</p>
    <p><strong>Pronóstico:</strong> {{ $mascota->pronostico }}</p>

    
    <a href="{{ route('mascotas.edit', $mascota->id) }}" class="btn btn-warning">Editar</a>
    <form action="{{ route('mascotas.destroy', $mascota->id) }}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Eliminar</button>
    </form>
    <a href="{{ route('mascotas.index') }}" class="btn btn-secondary">Volver</a>
@endsection
