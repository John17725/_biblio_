@extends('layouts.app')
@section('content')
<div class="container">
    <form >
        <div class="input-group mb-3">
        <input type="text" class="form-control" name="matricula"placeholder="Ingresa tu matricula" aria-label="Recipient's username" aria-describedby="button-addon2">
        <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="sumbit" id="button-addon2">Asistencia</button>
        </div>
        </div>
    </form>
</div>
@endsection