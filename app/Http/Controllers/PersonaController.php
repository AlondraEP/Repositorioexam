<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;

class PersonaController extends Controller
{
    // Muestra una lista de personas
    public function index()
    {
        $personas = Persona::all();
        return view('personas.index', compact('personas'));
    }

    // Muestra el formulario para crear una nueva persona
    public function create()
    {
        echo "Este es un mensaje para mostrar en el método create.";
        return view('personas.create');
    }

    // Almacena una nueva persona en la base de datos
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'fecha_nacimiento' => 'required|date',
            'curp' => 'required|unique:personas',
            'rfc' => 'required|unique:personas',
        ]);

        Persona::create($request->all());

        return redirect()->route('personas.index')->with('success', 'Persona creada exitosamente.');
    }

    // Muestra los detalles de una persona específica
    public function show(Persona $persona)
    {
        return view('personas.show', compact('persona'));
    }

    // Muestra el formulario para editar una persona
    public function edit(Persona $persona)
    {
        return view('personas.edit', compact('persona'));
    }

    // Actualiza los detalles de una persona específica
    public function update(Request $request, Persona $persona)
    {
        $request->validate([
            'nombre' => 'required',
            'fecha_nacimiento' => 'required|date',
            'curp' => 'required|unique:personas,curp,'.$persona->id,
            'rfc' => 'required|unique:personas,rfc,'.$persona->id,
        ]);

        $persona->update($request->all());

        return redirect()->route('personas.index')->with('success', 'Persona actualizada exitosamente.');
    }

    // Elimina una persona específica
    public function destroy(Persona $persona)
    {
        $persona->delete();

        return redirect()->route('personas.index')->with('success', 'Persona eliminada exitosamente.');
    }
}
?>
