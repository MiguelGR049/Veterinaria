<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ControllerCitas;
use Illuminate\Support\Facades\Route;

Route::middleware("guest")->group(function () {
    Route::get('/', [AuthController::class, 'login'])->name('login');
    Route::post('/logear', [AuthController::class, 'logear'])->name('logear');
});

Route::middleware("auth")->group(function () {
    Route::get('/home', [AuthController::class, 'home'])->name('home');
    Route::get('/usuarios', [AuthController::class, 'usuarios'])->name('usuarios');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/show/{id}', [AuthController::class, 'show'])->name('show');
    Route::get('/edit/{id}', [AuthController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [AuthController::class, 'update'])->name('update');
    Route::delete('/destroy/{id}', [AuthController::class, 'destroy'])->name('destroy');
    Route::get('/activo/{id}', [AuthController::class, 'activo'])->name('activo');

    Route::get('/citas', [ControllerCitas::class, 'citas'])->name('citas');
    Route::get('/agendar', [ControllerCitas::class, 'agendar'])->name('agendar');
    Route::post('/store', [ControllerCitas::class, 'store'])->name('agendarCita');
});
