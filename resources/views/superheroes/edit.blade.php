@extends('layouts.app')

@section('content')
    <h1>Editar Superhéroe</h1>
    <form action="{{ route('superheroes.update', $superheroe->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nombre_verdadero">Nombre Verdadero:</label>
        <input type="text" name="nombre_verdadero" id="nombre_verdadero" value="{{ $superheroe->nombre_verdadero }}" required>
        <label for="nombre_superheroe">Nombre Superhéroe:</label>
        <input type="text" name="nombre_superheroe" id="nombre_superheroe" value="{{ $superheroe->nombre_superheroe }}" required>
        <!-- Otros campos aquí -->
        <button type="submit">Guardar Cambios</button>
    </form>
@endsection
