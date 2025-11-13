@extends('layouts.main')
@section('contenido')

<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="col-auto">
            <h1>Bienvenido</h1>
            <a href="{{ route('logout') }}" class="btn btn-danger">Salir</a>
        </div>
    </div>
</div>

@endsection