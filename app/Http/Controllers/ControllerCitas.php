<?php

namespace App\Http\Controllers;

use App\Models\Citas;
use Illuminate\Http\Request;

class ControllerCitas extends Controller
{
    
    public function citas(){
        $titulo_pagina = 'Citas';
        $datos = Citas::paginate(5);
        return view('modules.citas.index', compact('titulo_pagina', 'datos'));
    }

    public function agendar(){
        $titulo_pagina = 'Agendar Cita';
        return view('modules.citas.agendar', compact('titulo_pagina'));
    }

    public function store(Request $request){
        $datos = new Citas();
        $datos->fecha = $request->fecha;
        $datos->motivo = $request->motivo;
        $datos->cliente = $request->cliente;
        $datos->mascota = $request->mascota;
        $datos->telefono = $request->telefono;
        $datos->save();
        return to_route('citas');
    }


}
