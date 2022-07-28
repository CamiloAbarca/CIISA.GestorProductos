<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/principal', function () {
    return view('principal');
});

Route::get('/principal/producto/{id?}', function ($id=10) {
    return view('principal, array{
            "id" => $id
        ');
});

Route::get('/principal/sucursales', function () {
    return view('sucursales');
});

Route::get('/principal/categorias', function () {
    return view('categorias');
});

Route::get('/principal/productos', function () {
    return view('productos');
});