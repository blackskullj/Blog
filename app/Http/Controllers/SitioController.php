<?php

namespace App\Http\Controllers;

use App\Contacto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        //Usando Query Builder
        /*DB::table('contactos')->insert([
            'correo' => $request->input('correo'),
            'comentario' => $request->comentario,
            'created_at' => now(),
            'updated_at' => now()
        ]);*/
        
        //Modelo #1
        /*$contacto = new Contacto();
        $contacto->correo = $request->correo;
        $contacto->comentario = $request->comentario;
        $contacto->save();*/

        //Modelo #2
        /*Contacto::create([
            'correo' => $request->correo,
            'comentario' => $request->comentario
        ]);*/
        
        //Modelo #3
        Contacto::create($request->all());

        return redirect()->route('ver-mensajes');
    }

    public function verMensajes()
    {
        /* Utilizando Query Builder
        $mensajes = DB::table(contactos)->get();
        */

        /* Utilizando Model*/
        $mensajes = Contacto::all();
        return view('ver-mensajes', compact('mensajes'));
        /*$mensajes = Contacto::where('correo', '!=', 'x@y.com')
            ->orWhere('correo', 'like', '%com')
            ->get();
        return view('ver-mensajes', compact('mensajes'));*/
    }
}
