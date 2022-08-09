<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sucursal;

class sucursalesController extends Controller
{
    public function sucursales(){
        return view('sucursales');
    }

    public function guardar(Request $request){
        
        $this->validate($request, [
            'nombre' => 'required',
            'direccion' => 'required'
        ]);

        $sucursales = new sucursal();
        $sucursales->nombre = $request->post('nombre');
        $sucursales->direccion = $request->post('direccion');

        $sucursales->save();

        return redirect()->route("sucursalesGuardar")->with("success", "Sucursal agregada con Exito!");

    }

    public function listarSucursales(){

        $sucursales = \DB::table('sucursales')
                        ->select('*')
                        ->orderBy('id')
                        ->get();
        return view('sucursales')->with('sucursales', $sucursales);
    }
}
