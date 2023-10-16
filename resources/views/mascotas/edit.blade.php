@php
use App\Models\Mascota;
$pronosticoOptions = Mascota::getPronosticoOptions();
@endphp

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mt-5">Editar Mascota</h1>

        <form action="{{ route('mascotas.update', $mascota->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" class="form-control"
                value="{{ old('nombre', $mascota->nombre) }}" required>
                @error('nombre')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="especie">Especie:</label>
                <input type="text" name="especie" id="especie" class="form-control"
                value="{{ old('especie', $mascota->especie) }}" required>
                @error('especie')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for ="raza">Raza:</label>
                <input type="text" name="raza" id="raza" class="form-control"
                value="{{ old('raza', $mascota->raza) }}" required>
                @error('raza')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="edad">Edad:</label>
                <input type="number" name="edad" id="edad" class="form-control"
                value="{{ old('edad', $mascota->edad) }}" required>
                @error('edad')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="peso">Peso:</label>
                <input type="number" step="0.01" name="peso" id="peso" class="form-control"
                value="{{ old('peso', $mascota->peso) }}" required>
                @error('peso')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
           
            <div class="form-check">
                <input type="hidden" name="vacunada" value="false">
                <input type="checkbox" name="vacunada" id="vacunada" class="form-check-input" value="true" {{ $mascota->vacunada ? 'checked' : '' }}>
                <label for="vacunada" class="form-check-label">Vacunada</label>
            </div>
            
            <div class="form-group">
                <label for="pronostico">Pronóstico:</label>
                <select name="pronostico" id="pronostico" class="form-control" required>
                    @foreach ($pronosticoOptions as $key => $value)
                        <option value="{{ $key }}" {{ old('pronostico', $mascota->pronostico)
                         == $key ? 'selected' : '' }}>
                            {{ $value }}
                        </option>
                    @endforeach
                </select>
                @error('pronostico')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            

            <!-- Botón de guardar -->
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
@endsection
