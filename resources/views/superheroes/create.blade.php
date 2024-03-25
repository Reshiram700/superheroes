@extends('layouts.app')

@section('content')
    <h1>Crear Nuevo Superhéroe</h1>
    <form action="{{ route('superheroes.store') }}" method="POST">
        @csrf
        <label for="nombre_verdadero">Nombre Verdadero:</label>
        <input type="text" name="nombre_verdadero" id="nombre_verdadero" required>
        <label for="nombre_superheroe">Nombre Superhéroe:</label>
        <input type="text" name="nombre_superheroe" id="nombre_superheroe" required>
        <!-- Otros campos aquí -->
        <button type="submit">Guardar</button>
    </form>
@endsection
