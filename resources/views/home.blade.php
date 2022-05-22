@extends('layouts.app')
@section('content')
<div>
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('libros.index') }}">Listar libros</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('libros.new') }}">Nuevo libro</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('estudiante.index') }}">Listar Estudiantes</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('estudiante.new') }}">Nuevo estudiante</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('prestamos.index') }}">Listar Prestamos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('prestamos.new') }}">Nuevo Prestamos</a>
        </li>
    </ul>
</div>
@endsection
