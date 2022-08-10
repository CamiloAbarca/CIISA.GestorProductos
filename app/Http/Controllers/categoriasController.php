<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categoria;

class categoriasController extends Controller
{
    public function categorias(){
        return view('categorias');
    }

    public function guardar(Request $request){
        
        $this->validate($request, [
            'nombre' => 'required',
            'detalle' => 'required'
        ]);

        $categorias = new categoria();
        $categorias->nombre = $request->post('nombre');
        $categorias->detalle = $request->post('detalle');

        $categorias->save();

        return redirect()->route("categoriasGuardar")->with("success", "Categoría agregada con Exito!");

    }

    public function listarCategorias(){

        $categorias = \DB::table('categorias')
                        ->select('*')
                        ->orderBy('id')
                        ->get();
        return view('categorias')->with('categorias', $categorias);
    }
}
