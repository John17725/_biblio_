@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Alumnos</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">ID</th>
                    <th scope="col">Matricula</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Carrera</th>
                    <th scope="col">Grado</th>
                    <th scope="col">Grupo</th>
                    <th scope="col">Curp</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $key => $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->id_school }}</td>
                        <td>{{ $item->enrollment }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->last_name }}</td>
                        <td>{{ $item->career }}</td>
                        <td>{{ $item->grade }}</td>
                        <td>{{ $item->group }}</td>
                        <td>{{ $item->CURP }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                {{ $students->links() }}
            </ul>
        </nav>
    </div>
@endsection
