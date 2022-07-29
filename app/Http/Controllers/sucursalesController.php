<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sucursalesController extends Controller
{
    public function sucursales(){
        return view('sucursales');
    }

    public function guardar(Request $request){
        //dd($request);
        return "Nombre: ". $request->input("nombreSucursal").
        ", Dirección: ". $request->input("direccionSucursal");
    }
}
