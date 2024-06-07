<!-- resources/views/personas/index.blade.php -->
<h1>Listado de Personas</h1>

<a href="{{ route('personas.index') }}">Crear Persona</a>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Fecha de Nacimiento</th>
            <th>CURP</th>
            <th>RFC</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($personas as $persona)
            <tr>
                <td>{{ $persona->id }}</td>
                <td>{{ $persona->nombre }}</td>
                <td>{{ $persona->fecha_nacimiento }}</td>
                <td>{{ $persona->curp }}</td>
                <td>{{ $persona->rfc }}</td>
                <td>
                    <a href="{{ route('personas.show', $persona->id) }}">Ver</a>
                    <a href="{{ route('personas.edit', $persona->id) }}">Editar</a>
                    <form action="{{ route('personas.destroy', $persona->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
