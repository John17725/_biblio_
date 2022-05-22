@extends('layouts.app')
@section('content')
    <h1>Registro de estudiante</h1>
    <form action="{{ route('estudiante.save') }}" method="POST" class="container-form">
        @csrf
        <div class="child-container">
            <div class="section-left-form">
                <div class="form-group">
                    <label for="name" class="form-label">Nombre del alumno(a)</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="mb-2">
                    <label for="lastname" class="form-label">Apellidos del alumno(a)</label>
                    <input type="text" class="form-control" id="lastname" name="lastname">
                </div>
                <div class="mb-2">
                    <label for="enrollment" class="form-label">Matricula</label>
                    <input type="text" class="form-control" id="enrollment" name="enrollment">
                </div>
                <div class="mb-2">
                    <label for="id_school" class="form-label">ID</label>
                    <input type="text" class="form-control" id="id_school" name="id_school">
                </div>
                <div class="mb-2">
                    <label for="grade" class="form-label">Grado</label>
                    <input type="text" class="form-control" id="grade" name="grade">
                </div>
                <div class="mb-2">
                    <label for="group" class="form-label">Grupo</label>
                    <input type="text" class="form-control" id="group" name="group">
                </div>
                <div class="mb-2">
                    <label for="career" class="form-label">Carrera</label>
                    <input type="text" class="form-control" id="career" name="career">
                </div>
                <div class="mb-2">
                    <label for="curp" class="form-label">CURP</label>
                    <input type="text" class="form-control" id="curp" name="curp">
                </div>
            </div>
        </div>
        <div class="button-form">
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </form>
@endsection
