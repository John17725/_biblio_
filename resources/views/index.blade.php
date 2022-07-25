@extends('layouts.app')
<script {{ asset('resources/js/app.js') }} defer></script>
<script>
    window.routes = {
        'getbookdata' : '{{ route('libro.data') }}',
        'getdatabookbarras' : '{{route('libro.databarras')}}'
    }
</script>
@section('content')
    <div class="container">
        <div  id="app" class="container">
            <searche-book />
        </div>
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
                    <th scope="col">Numero de codigo de barras</th>
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
                        <td>{{ $item->serialnumber }}</td>
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
