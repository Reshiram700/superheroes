@extends('layouts.app')

@section('content')
    <h1>Lista de Superhéroes</h1>
    <a href="{{ route('superheroes.create') }}" class="btn btn-primary">Agregar Superhéroe</a>
    <ul>
        @foreach($superheroes as $superheroe)
            <li>
                {{ $superheroe->nombre_superheroe }} ({{ $superheroe->nombre_verdadero }})
                <a href="{{ route('superheroes.show', $superheroe->id) }}" class="btn btn-info">Ver Detalles</a>
                <a href="{{ route('superheroes.edit', $superheroe->id) }}" class="btn btn-warning">Editar</a>
                <form action="{{ route('superheroes.destroy', $superheroe->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar este superhéroe?')">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
