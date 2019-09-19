<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitioController extends Controller
{
    public function bienvenida($nombre, $apellido = null)
    {
        $nombre = strtoupper($nombre);
        $apellido = strtoupper($apellido);
        return view('landing-page', compact('nombre', 'apellido'));//->with(['nombre' => $nombre]);
    }

    public function contacto()
    {
        return view('contacto');
    }

    public function guardaContacto(Request $request)
    {
        //recibit
        //validar
        //salir
        dd($request->all());
    }
}
