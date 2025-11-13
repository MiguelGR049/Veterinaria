@extends('layouts.main')
@section('contenido')

<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="col-auto">
            <div class="card justify-content-center">
                <img class="mx-auto d-block mt-2" src="{{ asset('img/happy.png') }}" height="140" width="125px">
                <h2 class="text-center">Registro Usuario</h2>
                <form action="{{ route('registrar')}}" method="post" class="row mb-3 p-3">
                    @csrf
                    @method('post')
                    <div class="col-12">
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" class="form-control mb-3" id="name" name="name" placeholder="Ejemplo: Fulano" required>
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control mb-3" id="email" name="email" placeholder="email@email.com" required>
                    </div>
                    <div class="col-md-6">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control mb-3" id="password" name="password" required>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-success me-1"><i class="fa-solid fa-chalkboard-user"></i> Registrar</button>
                        <a href="{{route('login')}}" class="btn btn-warning"><i class="fa-solid fa-right-to-bracket"></i> Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection