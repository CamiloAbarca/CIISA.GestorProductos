<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class categoriasController extends Controller
{
    public function categorias(){
        return view('categorias');
    }

    public function guardar(Request $request){
        //dd($request);
        return "Nombre: ". $request->input("nombreCategoria").
        ", Detalles: ". $request->input("detalleCategoria");
    }
}
