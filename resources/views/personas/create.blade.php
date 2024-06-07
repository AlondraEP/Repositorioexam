<!-- resources/views/personas/create.blade.php -->
<h1>Crear Persona</h1>

<form action="{{ route('personas.store') }}" method="POST">
    @csrf
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required>

    <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
    <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required>

    <label for="curp">CURP:</label>
    <input type="text" id="curp" name="curp" required>

    <label for="rfc">RFC:</label>
    <input type="text" id="rfc" name="rfc" required>

    <button type="submit">Guardar</button>
</form>

