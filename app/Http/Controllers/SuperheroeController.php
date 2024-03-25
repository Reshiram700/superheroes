<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Superheroe;

class SuperheroeController extends Controller
{
    // Muestra una lista de superhéroes
    public function index()
    {
    $superheroes = Superheroe::all();
    return view('superheroes.index', ['superheroes' => $superheroes]); 
    }

    // Muestra el formulario para crear un nuevo superhéroe
    public function create()
    {
        return view('superheroes.create');
    }

    // Guarda un nuevo superhéroe en la base de datos
    public function store(Request $request)
    {
        $request->validate([
            'nombre_verdadero' => 'required',
            'nombre_superheroe' => 'required',
            // Agrega aquí las validaciones para los demás campos
        ]);

        Superheroe::create($request->all());

        return redirect()->route('superheroes.index')->with('success', 'Superhéroe creado exitosamente.');
    }

    // Muestra los detalles de un superhéroe específico
    public function show($id)
    {
        $superheroe = Superheroe::findOrFail($id);
        return view('superheroes.show', compact('superheroe'));
    }

    // Muestra el formulario para editar un superhéroe
    public function edit($id)
    {
        $superheroe = Superheroe::findOrFail($id);
        return view('superheroes.edit', compact('superheroe'));
    }

    // Actualiza un superhéroe específico en la base de datos
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre_verdadero' => 'required',
            'nombre_superheroe' => 'required',
            // Agrega aquí las validaciones para los demás campos
        ]);

        $superheroe = Superheroe::findOrFail($id);
        $superheroe->update($request->all());

        return redirect()->route('superheroes.index')->with('success', 'Superhéroe actualizado exitosamente.');
    }

    // Elimina un superhéroe específico de la base de datos
    public function destroy($id)
    {
        $superheroe = Superheroe::findOrFail($id);
        $superheroe->delete();

        return redirect()->route('superheroes.index')->with('success', 'Superhéroe eliminado exitosamente.');
    }
}
