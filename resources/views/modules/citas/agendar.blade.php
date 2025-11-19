@extends('layouts.main')
@section('contenido')
@include('layouts.navbar')

<div class="container mt-1">
    <div class="row justify-content-center align-items-center">
        <div class="col-auto">
            <div class="card justify-content-center" id="card">
                <img class="mx-auto d-block mt-2" src="{{ asset('img/HamtaroN.webp') }}" height="150" width="125px">
                <h2 class="text-center">Realizar Cita</h2>
                <form action="{{ route('agendarCita') }}" method="post" class="mb-3 p-3">
                    @csrf 
                    @method('post')
                    <div class="col mb-3">
                        <label for="fecha" class="form-label">Fecha y Hora</label>
                        <input type="datetime-local" class="form-control" id="fecha" name="fecha" required>
                    </div>
                    <div class="col mb-3">
                        <label for="motivo" class="form-label">Motivo</label>
                        <input type="text" class="form-control" id="motivo" name="motivo" required>
                    </div>
                    <div class="col mb-3">
                        <label for="cliente" class="form-label">Cliente</label>
                        <input type="text" class="form-control" id="cliente" name="cliente" required>
                    </div>
                    <div class="col mb-3">
                        <label for="mascota" class="form-label">Mascota</label>
                        <input type="text" class="form-control" id="mascota" name="mascota" required>
                    </div>
                    <div class="col mb-3">
                        <label for="telefono" class="form-label">Telefono</label>
                        <input type="text" class="form-control" id="telefono" name="telefono" required>
                    </div>
                    <div class="d-flex justify-content-center text-center">
                        <button type="submit" class="btn btn-success me-1">Agendar</button>
                        <a href="{{ route('citas') }}" class="btn btn-secondary">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection