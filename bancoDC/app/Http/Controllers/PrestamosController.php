<?php

namespace App\Http\Controllers;

use App\Models\Prestacion;
use App\Models\Usuario;
use Illuminate\Http\Request;

class PrestamosController extends Controller
{
    public function index($id){
        $usuario = Usuario::find($id);
        return view('index',[
            'usuario' => $usuario
        ]);
    }

    public function store(Request $request){
        $guardar = new Prestacion;
        $guardar->montoPrestamo = $request["montoPrestamo"];
        $guardar->montoSeguro = $request["montoSeguro"];
        $guardar->montoRecibido = $request["montoRecibido"];
        $guardar->interesCalculado = $request["interesCalculado"];
        $guardar->cuotasPrestamo = $request["cuotasPrestamo"];
        $guardar->montoCuota = $request["montoCuota"];
        $guardar->montoTotalPago = $request["montoTotalPago"];
        $guardar->idUsuario = $request["idUsuario"];
        $guardar->save();
        return view('mensaje');
    }

}
