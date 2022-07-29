<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productosController extends Controller
{
    public function crear(){
        return view('productos');
    }

    public function editar(){
        return view('editarProducto');
    }

    public function eliminar(){
        return view('eliminarProducto');
    }

    public function ver(){
        return view('verProducto');
    }

    public function guardar(Request $request){
        //dd($request);
        return "Código: ". $request->input("codigo").
        ", Nombre: ". $request->input("nombre").
        ", Categoría: ". $request->input("categoria").
        ", Sucursal: ". $request->input("sucursal").
        ", Cantidad: ". $request->input("cantidad").
        ", Precio: ". $request->input("precio");
        ", Descripción: ". $request->input("descripcion");
    }
}
