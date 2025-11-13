@extends('layouts.main')
@section('contenido')

<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="col-auto">
            <div class="card justify-content-center">
                <img class="mx-auto d-block mt-2" src="{{ asset('img/panda.png') }}" height="125" width="125px">
                <h2 class="text-center">Iniciar Sesión</h2>
                <form action="{{ route('logear')}}" method="post" class="mb-3 p-3">
                    @csrf 
                    @method('post')
                    <div class="col mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email"  aria-describedby="emailHelp" required>
                    </div>
                    <div class="col mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-success me-1"><i class="fa-solid fa-right-to-bracket"></i> Iniciar</button>
                        <a href="{{route('registro')}}" class="btn btn-warning"><i class="fa-solid fa-chalkboard-user"></i> Registro</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection