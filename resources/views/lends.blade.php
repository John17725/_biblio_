<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Lib</title>
  </head>
  <body>
    <div class="container">
        <h1>Libros</h1>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Id alumno</th>
                <th scope="col">Nombre Alumno</th>
                <th scope="col">Id Libro</th>
                <th scope="col">Nombre libro</th>
                <th scope="col">Fecha de prestamo</th>
                <th scope="col">Fecha de devolucion</th>
              </tr>
            </thead>
            <tbody>
                @foreach ( $lends as $key => $item )    
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->student->id}}</td>
                        <td>{{ $item->student->name}}</td>
                        <td>{{ $item->book->id}}</td>
                        <td>{{ $item->book->title}}</td>
                        <td>{{ \Carbon\Carbon::parse($item->created_at)->format('d-m-Y')}}</td>
                        <td>{{ \Carbon\Carbon::parse($item->end_date)->format('d-m-Y')}}</td>
                    </tr>
                  @endforeach
            </tbody>
        </table>
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
              {{$lends->links()}}
            </ul>
          </nav>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>