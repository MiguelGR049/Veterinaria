@extends('layouts/main')
<div class="container mt-4">
    <div class="row mb-3 justify-content-center">
        <div id="card" class="card justify-content-center" id="card">
            <form action="{{ route('update', $datos->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <img class="mx-auto d-block mt-3" src="{{ asset('img/happy.png') }}" height="95" width="125px">
                <div class="card-body row justify-content-center">

                    <h2 class="fw-bold text-center">Actualizar datos de: {{ $datos->name }}</h2>

                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" value="{{ $datos->name }}" required>

                    <label for="email">Correo</label>
                    <input type="text" name="email" id="email" class="form-control" value="{{ $datos->email }}" required>
                    
                    <label for="password">Contraseña</label>
                    <input type="password" name="password" id="password" class="form-control">

                    <div class="col justify-content-center text-center">
                        <button class="btn btn-warning mt-3">Actualizar</button>
                        <a href="{{ route('usuarios')}}" class="btn btn-secondary mt-3">Cancelar</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>