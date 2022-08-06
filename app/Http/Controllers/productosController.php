<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\producto;
use App\Models\sucursale;
use App\Models\categoria;

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

    public function listarProductos(){
        //$productos = producto::all();

        //dd($productos);

        //return view("principal", array('productos' -> $productos));

        $productos = \DB::table('productos')
                        ->select('*')
                        ->orderBy('id')
                        ->get();
        return view('principal')->with('productos', $productos);
    }

    public function guardar(Request $request){

        $this->validate($request, [
            'codigo' => 'required|min:3|max:10',
            'nombre' => 'required',
            'categoria' => 'required',
            'sucursal' => 'required',
            'cantidad' => 'required|integer',
            'precio' => 'required|integer',
            'descripcion' => 'required',

        ]);
        return "Código: ". $request->input("codigo").
        ", Nombre: ". $request->input("nombre").
        ", Categoría: ". $request->input("categoria").
        ", Sucursal: ". $request->input("sucursal").
        ", Cantidad: ". $request->input("cantidad").
        ", Precio: ". $request->input("precio");
        ", Descripción: ". $request->input("descripcion");
    }
}
