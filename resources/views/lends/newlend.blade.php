@extends('layouts.app')
<script {{ asset('resources/js/app.js') }} defer></script>
<script>
    window.routes = {
        'getdatastudent' : '{{ route('prestamos.get.datastudent') }}',
        'getbookdatalend' : '{{ route('prestamos.get.databook') }}',
        'postnewlend' : '{{ route('prestamos.new.lend') }}',
    }
</script>
@section('content')
{{-- <div> --}}
    <div id='app'>
        <new-lend />
    </div>
{{-- </div> --}}
    {{-- <h1>Realizar prestamo</h1> --}}
    {{-- <form action="{{ route('estudiante.save') }}" method="POST" class="container-form">
        @csrf
        <div class="child-container">
            <div class="section-left-form">
                <div class="input-group mb-3">
                    <select class="form-select" id="inputGroupSelect02">
                        <option selected>Selecciona al alumno</option>
                        @foreach ($students as $key => $student)
                            <option>{{ $student->enrollment }} {{ $student->name }} {{ $student->last_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-2">
                    <label for="grade" class="form-label">Libro a prestar</label>
                    <input type="text" class="form-control" id="grade" name="grade">
                </div>
                <div class="input-group mb-3">
                    <select class="form-select" id="inputGroupSelect02">
                        <option selected>Selecciona el libro</option>
                        @foreach ($books as $key => $book)
                            <option>{{ $book->title }}</option>
                        @endforeach
                    </select>
                    <button type="submit" class="btn btn-primary">Prestar</button>
                </div>
            </div>
        </div>
        <div class="button-form">
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </form> --}}
@endsection
