@extends('layouts/main')

<div class="container mt-4">
    <h2>Mostrar la informacion de: {{ $datos->nombre }}</h2>
    <div class="row">
        <div class="col">
            <div class="card" id="tabla">
                <div class="card-body">
                    <table class="table table-sm text-center">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>Nombre</td>
                                <td>Matricula</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $datos->id }}</td>
                                <td>{{$datos->name }}</td>
                                <td>{{ $datos->email }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="{{ route('usuarios') }}" class="btn btn-secondary mt-4">Cancelar</a>
                </div>
            </div>
        </div>
    </div>
</div>