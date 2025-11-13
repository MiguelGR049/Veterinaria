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

    public function logear(Request $request){
        $credenciales = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($credenciales)){
            return to_route('home');
        }else{
            return to_route('login');
        }
    }

    public function logout(){
        Session::flush();
        Auth::logout();
        return to_route('login');
    }

    public function home(){
        $titulo_pagina = 'Home';
        return view('modules.home.home', compact('titulo_pagina'));
    }

}
