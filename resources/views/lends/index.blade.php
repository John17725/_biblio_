@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Prestamos</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Alumno</th>
                    <th scope="col">Libro prestado</th>
                    <th scope="col">Fecha de prestamo</th>
                    <th scope="col">Fecha de devolucion</th>
                    {{-- <th scope="col">updated_at</th> --}}
                    {{-- <th scope="col">Fecha de devolucion</th> --}}
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
                        @else
                            <td>{{ \Carbon\Carbon::parse($item->end_date)->isoFormat('dddd D \d\e MMMM \d\e\l Y') }}</td>
                        @endif
                        {{-- <td>{{ \Carbon\Carbon::parse($item->end_date)->format('d-m-Y') }}</td> --}}
                        {{-- <td>{{ \Carbon\Carbon::parse($item->updated_at)->format('d-m-Y') }}</td> --}}
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
