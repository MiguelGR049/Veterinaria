<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login(){
        $titulo_pagina = 'Login de usuario';
        return view('modules.login.index', compact('titulo_pagina'));
    }

    public function home(){
        $titulo_pagina = 'Home';
        return view('modules.home.home', compact('titulo_pagina'));
    }

    public function logear(Request $request){
        $credenciales = [
            'email' => $request->email,
            'password' => $request->password
        ];
        
        if(Auth::attempt($credenciales)){
            if(Auth::user()->activo == 0){
                Auth::logout();
                Session::flush();
                return to_route('login')->with('error', 'Usuario inactivo, contacte al administrador.');
            }else{
                return to_route('home');
            }
        }else{
            return to_route('login');
        }
    }

    public function logout(){
        Session::flush();
        Auth::logout();
        return to_route('login');
    }

    public function usuarios(){
        $titulo_pagina = 'Usuarios';
        $datos = User::paginate(5);
        return view('modules.usuarios.index', compact('titulo_pagina', 'datos'));
    }

    public function show(string $id){
        $titulo_pagina = "Detalle de usuario";
        $datos = User::find($id);
        return view('modules.usuarios.show', compact('titulo_pagina','datos'));
    }

    public function edit(string $id){
        $titulo_pagina = "Editar usuario";
        $datos = User::find($id);
        return view('modules.usuarios.edit', compact('titulo_pagina', 'datos'));
    }

    public function update(Request $request, string $id){
        $datos = User::find($id);
        $datos->email = $request->email;
        $datos->name = $request->name;
        $datos->password = Hash::make($request->password);
        $datos->save();
        return to_route('usuarios');
    }

    public function destroy(string $id){
        $datos = User::find($id);
        $datos->delete();
        return to_route('usuarios');
    }

    public function activo(Request $request){
        $datos = User::find($request->id);
        $datos->activo = $request->activo === 'on' ? 1 : 0;
        $datos->save();
        return to_route('usuarios');
    }

}
