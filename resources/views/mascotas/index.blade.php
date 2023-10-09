<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de mascotas</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    
</head>
<body>
    <h1>Listado de mascotas</h1>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Especie</th>
                <th>Raza</th>
                <th>Edad</th>
                <th>Peso</th>
                <th>Vacunada</th>
                <th>Fecha de Nacimiento</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mascotas as $mascota)
                <tr>
                    <td>{{ $mascota->nombre }}</td>
                    <td>{{ $mascota->especie }}</td>
                    <td>{{ $mascota->raza }}</td>
                    <td>{{ $mascota->edad }}</td>
                    <td>{{ $mascota->peso }}</td>
                    <td>{{ $mascota->vacunada ? 'Sí' : 'No' }}</td>
                    <td>{{ $mascota->fecha_nacimiento }}</td>
                    <td>
                        <a href="{{ route('mascotas.show', $mascota->id) }}" class="btn btn-primary">Ver</a>
                        <a href="{{ route('mascotas.edit', $mascota->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('mascotas.destroy', $mascota->id) }}"
                             method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('mascotas.create') }}" class="btn btn-success">Crear mascota</a>
</body>
</html>
