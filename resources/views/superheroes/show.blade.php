@extends('layouts.app')

@section('content')
    <h1>Detalles del Superhéroe</h1>
    <p><strong>Nombre Verdadero:</strong> {{ $superheroe->nombre_verdadero }}</p>
    <p><strong>Nombre Superhéroe:</strong> {{ $superheroe->nombre_superheroe }}</p>
    <!-- Otros detalles aquí -->
    <a href="{{ route('superheroes.index') }}" class="btn btn-primary">Volver a la Lista</a>
@endsection
