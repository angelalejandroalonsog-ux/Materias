<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar materia</title>
</head>
<body>
    <h1>Agregar materia</h1>

    <form action="{{ route('materia.store') }}" method="POST">
        @csrf

        <div>
            <label for="nombre">Nombre de la materia:</label>
            <input type="text" id="nombre" name="nombre" required>
        </div>

        <div>
            <label for="creditos">Créditos:</label>
            <input type="number" id="creditos" name="creditos" min="0" required>
        </div>

        <div>
            <label for="profesor">Profesor:</label>
            <input type="text" id="profesor" name="profesor" required>
        </div>

        <button type="submit">Guardar</button>
    </form>

    <a href="{{ route('materia.index') }}">Volver a los registros</a>
</body>
</html>
