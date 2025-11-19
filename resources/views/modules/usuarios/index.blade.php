@extends('layouts.main')
@section('contenido')
@include('layouts.navbar')

<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="col-auto">
            <div class="card" id="tabla">
                <div class="card-body">
                    <table class="table table-sm table-bordered" id="tabla">
                        <h2 class="text-center">Administracion de Usuarios</h2>
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Correo</th>
                                <th scope="col">Acciones</th>
                                <th scope="col">Activa/Desactivar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($datos as $dato)
                            <tr>
                                <td>{{ $dato->id }}</td>
                                <td>{{$dato->name }}</td>
                                <td>{{ $dato->email }}</td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <a href="{{ route('show', $dato->id) }}" class="btn btn-info me-1">
                                            <i class="fa-solid fa-list"></i>
                                            Mostrar
                                        </a>
                                        <a href="{{ route('edit', $dato->id) }}" class="btn btn-warning">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                            Editar
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <form class="form-check form-switch d-flex justify-content-center" method="put" action="{{ route('activo', $dato->id) }}">
                                        @csrf
                                        @method('put')
                                        <input class="form-check-input" type="checkbox" role="switch" name="activo" id="activo" onchange="this.form.submit()" {{ $dato->activo === 1 ? 'checked' : '' }}>
                                    </form>
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