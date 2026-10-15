<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle de materia</title>
</head>
<body>
    <h1>Detalle de materia</h1>

    <p><strong>ID:</strong> {{ $materia->id }}</p>
    <p><strong>Nombre:</strong> {{ $materia->nombre }}</p>
    <p><strong>Créditos:</strong> {{ $materia->creditos }}</p>
    <p><strong>Profesor:</strong> {{ $materia->profesor }}</p>

    <a href="{{ route('materia.index') }}">Regresar</a>

    <a href="{{ route('materia.edit', $materia) }}">Editar</a>

    <form action="{{ route('materia.destroy', $materia) }}" method="POST">
        @csrf
        @method('DELETE')

        <button type="submit">Eliminar</button>
    </form>
</body>
</html>