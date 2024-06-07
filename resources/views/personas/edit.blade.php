<!-- resources/views/personas/edit.blade.php -->
<h1>Editar Persona</h1>

<form action="{{ route('personas.update', $persona->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" value="{{ $persona->nombre }}" required>

    <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
    <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" value="{{ $persona->fecha_nacimiento }}" required>

    <label for="curp">CURP:</label>
    <input type="text" id="curp" name="curp" value="{{ $persona->curp }}" required>

    <label for="rfc">RFC:</label>
    <input type="text" id="rfc" name="rfc" value="{{ $persona->rfc }}" required>

    <button type="submit">Actualizar</button>
</form>


