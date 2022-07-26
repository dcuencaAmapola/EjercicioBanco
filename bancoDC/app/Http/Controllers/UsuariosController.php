<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    function index(){
        $usuario = Usuario::get();
        return view('usuarios.inicio', compact('usuario'));
    }

}
