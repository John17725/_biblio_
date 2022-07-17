@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{route('prestamos.find.lend')}}" method="POST">
            @csrf
            <div class="input-group mb-3">
                <input type="number" class="form-control" placeholder="Buscar por Folio"  name="folio" aria-describedby="button-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Button</button>
                </div>
            </div>
        </form>
    </div>
    <div class="container">
        <h1>Prestamos</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">FOLIO</th>
                    <th scope="col">Alumno</th>
                    <th scope="col">Libro prestado</th>
                    <th scope="col">Fecha de prestamo</th>
                    <th scope="col">Fecha de devolucion</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($lends as $key => $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->student->name }} {{ $item->student->last_name }}</td>
                        <td>{{ $item->book->title }}</td>
                        {{-- <td>{{ $item->end_date }}</td> --}}
                        <td>{{ \Carbon\Carbon::parse($item->created_at)->isoFormat('dddd D \d\e MMMM \d\e\l Y') }}</td>
                        @if ($item->end_date === null)
                            <td>Este libro no ha sido devuelto</td>
                            <td><a href="{{route('prestamos.return.lend', $item->id)}}" class="btn btn-warning">Devolver</a></td>
                        @else
                            <td>{{ \Carbon\Carbon::parse($item->end_date)->isoFormat('dddd D \d\e MMMM \d\e\l Y') }}</td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                {{ $lends->links() }}
            </ul>
        </nav>
    </div>
@endsection
