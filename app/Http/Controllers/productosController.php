<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\producto;
use App\Models\sucursal;
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

        $productos = new producto();
        $productos->codigo = $request->post('codigo');
        $productos->nombre = $request->post('nombre');
        $productos->categoriaId = $request->post('categoria');
        $productos->sucursalId = $request->post('sucursal');
        $productos->cantidad = $request->post('cantidad');
        $productos->precio = $request->post('precio');
        $productos->descripcion = $request->post('descripcion');

        $productos->save();

        return redirect()->route("productosGuardar")->with("success", "Producto creado con Exito!");
    }
}
