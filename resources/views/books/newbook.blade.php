@section('newbook')
    <form action="/saveBook" method="POST">
        @csrf
        <div class="section-left-form">
            <div class="form-group">
                <label for="titlebook" class="form-label">Titulo del libro</label>
                <input type="text" class="form-control" id="titlebook" name="titlebook">
            </div>
            <div class="mb-3">
                <label for="authorbook" class="form-label">Autor</label>
                <input type="text" class="form-control" id="authorbook" name="authorbook">
            </div>
            <div class="mb-3">
                <label for="pagesbook" class="form-label">Paginas</label>
                <input type="text" class="form-control" id="pagesbook" name="pagesbook">
            </div>
            <div class="mb-3">
                <label for="isbnbook" class="form-label">ISBN</label>
                <input type="text" class="form-control" id="isbnbook" name="isbnbook">
            </div>
            <div class="mb-3">
                <label for="editionbook" class="form-label">Edicion</label>
                <input type="text" class="form-control" id="editionbook" name="editionbook">
            </div>
            <div class="mb-3">
                <label for="numpiecesbook" class="form-label">Numero de piezas</label>
                <input type="text" class="form-control" id="numpiecesbook" name="numpiecesbook">
            </div>
            <div class="mb-3">
                <label for="clasificationbook" class="form-label">Clasificacion</label>
                <input type="text" class="form-control" id="clasificationbook" name="clasificationbook">
            </div>
            <div class="mb-3">
                <label for="editorialbook" class="form-label">Editorial</label>
                <input type="text" class="form-control" id="editorialbook" name="editorialbook">
            </div>
            <div class="mb-3">
                <label for="placebook" class="form-label">Lugar</label>
                <input type="text" class="form-control" id="placebook" name="placebook">
            </div>
            <div class="mb-3">
                <label for="numseriebook" class="form-label">Numero de serie</label>
                <input type="text" class="form-control" id="numseriebook" name="numseriebook">
            </div>
        </div>
        <div class="section-right-form">

        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    </body>
@endsection
