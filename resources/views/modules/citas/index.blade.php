@extends('layouts.main')
@section('contenido')
@include('layouts.navbar')

<div class="container mt-2">
    <div class="row justify-content-center align-items-center">
        <div class="col-auto">
            <div class="card" id="tabla">
                <div class="card-body">
                    <table class="table table-sm table-bordered" id="tabla">
                        <h2 class="text-center">Administracion de Citas</h2>
                        <div class="d-flex justify-content-center text-center">
                            <a href="{{ route('agendar') }}" class="btn btn-success mb-2">Agendar Cita</a>
                        </div>
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Fecha y Hora</th>
                                <th scope="col">Motivo</th>
                                <th scope="col">Cliente</th>
                                <th scope="col">Mascota</th>
                                <th scope="col">Telefono</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($datos as $dato)
                            <tr>
                                <td>{{ $dato->id }}</td>
                                <td>{{$dato->fecha }}</td>
                                <td>{{ $dato->motivo }}</td>
                                <td>{{ $dato->cliente }}</td>
                                <td>{{ $dato->mascota }}</td>
                                <td>{{ $dato->telefono }}</td>
                                <td>
                                    <!-- <div class="d-flex justify-content-center">
                                        <a href="{{ route('show', $dato->id) }}" class="btn btn-info me-1">
                                            <i class="fa-solid fa-list"></i>
                                            Mostrar
                                        </a>
                                        <a href="{{ route('edit', $dato->id) }}" class="btn btn-warning">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                            Editar
                                        </a>
                                    </div> -->
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td>No hay datos en la tabla</td>
                            </tr>
                            @endforelse ($datos as $dato)
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection