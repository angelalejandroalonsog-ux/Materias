<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <h1>Registro Materias</h1>
    <a href="{{ route('materia.index') }}" class="btn btn-primary mb-3">Regresar a la lista</a>
    <form action="{{ route('materia.update', $materia) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="mb-3>"
            <label for="nombre" class="form-label">
                Nombre:
                <input
                    type="text"
                    id="nombre"
                    class="form-control"
                    name="nombre"
                    value="{{ $materia->nombre }}"
                    required
                >
            </label>
        </div>

        <div class="mb-3>"
            <label for="creditos class="form-label">Créditos:</label>
            <input type="number"
                name="creditos"
                id="creditos"
                min="0"
                class="form-control"
                value="{{ $materia->creditos }}"
                required
                >
        </div>

        <div class="mb-3>"
            <label for="profesor" class="form-label">Profesor:</label>
            <input
                type="text"
                name="profesor"
                id="profesor"
                value="{{ $materia->profesor }}"
                class="form-control"
                required
            >
        </div>

        <button type="submit" class="btn btn-primary">Guardar cambios</button>
    </form>

    <a href="{{ route('materia.show', $materia) }}">Cancelar</a>
</body>
</html>