@extends('layouts.app')
@section('content')
<div>
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{asset('assets/wallpaper2.jpeg')}}"  class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{asset('assets/wallpaper1.jpeg')}}"  class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{asset('assets/wallpaper3.jpeg')}}"  class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleFade" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleFade" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </button>
      </div>
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="btn btn-secondary mr-md-3" aria-current="page" href="{{ route('libros.index') }}">Listar libros</a>
        </li>
        <li class="nav-item">
            <a class="btn btn-secondary mr-md-3" aria-current="page" href="{{ route('libros.new') }}">Nuevo libro</a>
        </li>
        <li class="nav-item">
            <a class="btn btn-secondary mr-md-3" aria-current="page" href="{{ route('estudiante.index') }}">Listar Estudiantes</a>
        </li>
        <li class="nav-item">
            <a class="btn btn-secondary mr-md-3" aria-current="page" href="{{ route('estudiante.new') }}">Nuevo estudiante</a>
        </li>
        <li class="nav-item">
            <a class="btn btn-secondary mr-md-3" aria-current="page" href="{{ route('prestamos.index') }}">Listar Prestamos</a>
        </li>
        <li class="nav-item">
            <a class="btn btn-secondary mr-md-3" aria-current="page" href="{{ route('prestamos.new') }}">Nuevo Prestamos</a>
        </li>
        <li class="nav-item">
            <a class="btn btn-secondary mr-md-3" aria-current="page" href="{{ route('biblio.stats') }}">Estadisticas de asistencia anual</a>
        </li>
        <li class="nav-item">
            <a class="btn btn-secondary mr-md-3" aria-current="page" href="{{ route('biblio.assistance.new') }}">Registro de asistencia</a>
        </li>
    </ul>
      
</div>
@endsection
