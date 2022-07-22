@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{route('prestamos.find.lend')}}" method="POST">
            @csrf
            <div class="input-group mb-3">
                <input type="number" class="form-control" placeholder="Buscar por Folio"  name="folio" aria-describedby="button-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Buscar</button>
                </div>
            </div>
        </form>
        <form action="{{route('prestamos.find.lend.name')}}" method="POST">
            @csrf
            <div class="row">
              <div class="col">
                <input type="text" class="form-control" name="name" placeholder="Nombre">
              </div>
              <div class="col">
                <input type="text" class="form-control" name="lastname" placeholder="Apellido paterno">
              </div>
              <div class="col">
                <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Buscar</button>
                </div>
            </div>
          </form>
        {{-- <form action="{{route('prestamos.find.lend.name')}}" method="POST">
            @csrf
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Buscar por nombre del alumno"  name="alumno" aria-describedby="button-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Buscar</button>
                </div>
            </div>
        </form> --}}
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
                @if (isset($search))
                    <th>{{$lend->id}}</th>
                    <th>{{$lend->student->name}} {{ $lend->student->last_name }}</th>
                    <th>{{$lend->book->title}}  ISBN: {{ $lend->book->ISBN }}</th>
                    <th>{{ \Carbon\Carbon::parse($lend->created_at)->isoFormat('dddd D \d\e MMMM \d\e\l Y') }}</th>
                    @if ($lend->end_date === null)
                        <td>Este libro no ha sido devuelto</td>
                        <td><a href="{{route('prestamos.return.lend', $lend->id)}}" class="btn btn-warning">Devolver</a></td>
                    @else
                        <td>{{ \Carbon\Carbon::parse($lend->end_date)->isoFormat('dddd D \d\e MMMM \d\e\l Y') }}</td>
                    @endif
                @else
                    @foreach ($lends as $key => $item)
                        <tr>
                            <th scope="row">{{ $item->id }}</th>
                            <td>{{ $item->student->name }} {{ $item->student->last_name }}</td>
                            <td>{{ $item->book->title }} ISBN: {{ $item->book->ISBN }}</td>
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
                @endif
            </tbody>
        </table>
        {{-- <nav aria-label="Page navigation example">
            @if (isset($lends))
                <ul class="pagination justify-content-center">
                    {{ $lends->links() }}
                </ul>
            @endif
        </nav> --}}
    </div>
@endsection
