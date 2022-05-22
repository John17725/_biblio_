@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Libros</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Paginas</th>
                    <th scope="col">ISBN</th>
                    <th scope="col">Edicion</th>
                    <th scope="col">Piezas/Ejemplares</th>
                    <th scope="col">Clasificacion</th>
                    <th scope="col">Editorial</th>
                    <th scope="col">Place</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $key => $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->author }}</td>
                        <td>{{ $item->pages }}</td>
                        <td>{{ $item->ISBN }}</td>
                        <td>{{ $item->edition }}</td>
                        <td>{{ $item->pieces }}</td>
                        <td>{{ $item->clasification }}</td>
                        <td>{{ $item->editorial }}</td>
                        <td>{{ $item->place }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                {{ $books->links() }}
            </ul>
        </nav>
    </div>
@endsection
