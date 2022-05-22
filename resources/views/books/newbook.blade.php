@extends('layouts.app')
@section('content')
    <form action="/saveBook" method="POST" class="container-form">
        @csrf
        <div class="child-container">
            <div class="section-left-form">
                <div class="form-group">
                    <label for="titlebook" class="form-label">Titulo del libro</label>
                    <input type="text" class="form-control" id="titlebook" name="titlebook">
                </div>
                <div class="mb-2">
                    <label for="authorbook" class="form-label">Autor</label>
                    <input type="text" class="form-control" id="authorbook" name="authorbook">
                </div>
                <div class="mb-2">
                    <label for="pagesbook" class="form-label">Paginas</label>
                    <input type="text" class="form-control" id="pagesbook" name="pagesbook">
                </div>
                <div class="mb-2">
                    <label for="isbnbook" class="form-label">ISBN</label>
                    <input type="text" class="form-control" id="isbnbook" name="isbnbook">
                </div>
                <div class="mb-2">
                    <label for="editionbook" class="form-label">Edicion</label>
                    <input type="text" class="form-control" id="editionbook" name="editionbook">
                </div>
                <div class="mb-2">
                    <label for="numpiecesbook" class="form-label">Numero de piezas</label>
                    <input type="text" class="form-control" id="numpiecesbook" name="numpiecesbook">
                </div>
                <div class="mb-2">
                    <label for="clasificationbook" class="form-label">Clasificacion</label>
                    <input type="text" class="form-control" id="clasificationbook" name="clasificationbook">
                </div>
                <div class="mb-2">
                    <label for="editorialbook" class="form-label">Editorial</label>
                    <input type="text" class="form-control" id="editorialbook" name="editorialbook">
                </div>
                <div class="mb-2">
                    <label for="placebook" class="form-label">Lugar</label>
                    <input type="text" class="form-control" id="placebook" name="placebook">
                </div>
                <div class="mb-2">
                    <label for="numseriebook" class="form-label">Numero de serie</label>
                    <input type="text" class="form-control" id="numseriebook" name="numseriebook">
                </div>
            </div>
            <div class="section-right-form">
                <div class="mb-2">
                    <label for="chapter1" class="form-label">Capitulo 1</label>
                    <input type="text" class="form-control" id="chapter1" name="chapter1">
                </div>
                <div class="mb-2">
                    <label for="chapter2" class="form-label">Capitulo 2</label>
                    <input type="text" class="form-control" id="chapter2" name="chapter2">
                </div>
                <div class="mb-2">
                    <label for="chapter3" class="form-label">Capitulo 3</label>
                    <input type="text" class="form-control" id="chapter3" name="chapter3">
                </div>
                <div class="mb-2">
                    <label for="chapter4" class="form-label">Capitulo 4</label>
                    <input type="text" class="form-control" id="chapter4" name="chapter4">
                </div>
                <div class="mb-2">
                    <label for="chapter5" class="form-label">Capitulo 5</label>
                    <input type="text" class="form-control" id="chapter5" name="chapter5">
                </div>
                <div class="mb-2">
                    <label for="chapter6" class="form-label">Capitulo 6</label>
                    <input type="text" class="form-control" id="chapter6" name="chapter6">
                </div>
                <div class="mb-2">
                    <label for="chapter7" class="form-label">Capitulo 7</label>
                    <input type="text" class="form-control" id="chapter7" name="chapter7">
                </div>
                <div class="mb-2">
                    <label for="chapter8" class="form-label">Capitulo 8</label>
                    <input type="text" class="form-control" id="chapter8" name="chapter8">
                </div>
                <div class="mb-2">
                    <label for="chapter9" class="form-label">Capitulo 9</label>
                    <input type="text" class="form-control" id="chapter9" name="chapter9">
                </div>
                <div class="mb-2">
                    <label for="chapter10" class="form-label">Capitulo 10</label>
                    <input type="text" class="form-control" id="chapter10" name="chapter10">
                </div>

            </div>
        </div>
        <div class="button-form">
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </form>
@endsection
