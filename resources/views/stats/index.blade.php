@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="btn-group" role="group" aria-label="Basic example">
            <a href="{{route('biblio.stats.year', 2022)}}"class="btn btn-secondary" >2022</a>
            <a href="{{route('biblio.stats.year', 2023)}}"class="btn btn-secondary" >2023</a>
            <a href="{{route('biblio.stats.year', 2024)}}"class="btn btn-secondary" >2024</a>
        </div>
        <div class="container mt-2">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Total de asistencias en el año</th>
                        <th scope="col">Mujeres que asistieron</th>
                        <th scope="col">Hombres que asistieron</th>
                        <th scope="col">Total de prestamos</th>
                    </tr>
                </thead>
                <tbody>
                    @if (isset($totalIngresos))
                        <tr>
                            <th scope="row">{{$totalIngresos}}</th>
                            <td>{{$femeninos}}</td>
                            <td>{{$masculinos}}</td>
                            <td>{{$Totallends}}</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
