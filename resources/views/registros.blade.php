<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Materias registradas</title>
</head>
<body>
    <h1>Materias registradas</h1>

    <a href="{{ route('materia.create') }}">Agregar materia</a>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Créditos</th>
                <th>Profesor</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($materias as $materia)
                <tr>
                    <td>{{ $materia->id }}</td>
                    <td>{{ $materia->nombre }}</td>
                    <td>{{ $materia->creditos }}</td>
                    <td>{{ $materia->profesor }}</td>
                    <td>
                        <a href="{{ route('materia.show', $materia) }}">
                            Ver detalle
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
