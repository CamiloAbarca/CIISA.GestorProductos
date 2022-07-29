<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class categoriasController extends Controller
{
    public function categorias(){
        return view('categorias');
    }
}
