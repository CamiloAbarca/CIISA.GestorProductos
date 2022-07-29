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

Route::get('/principal', 'App\Http\Controllers\principalController@index');
Route::get('/sucursales', 'App\Http\Controllers\sucursalesController@sucursales')->name('gestionSucursales');
Route::get('/categorias', 'App\Http\Controllers\categoriasController@categorias')->name('gestionCategorias');
Route::get('/Principal', 'App\Http\Controllers\principalController@volverPrincipal')->name('volverPrincipal');

Route::get('/productos', 'App\Http\Controllers\productosController@crear')->name('crearProducto');
Route::get('/editarProducto', 'App\Http\Controllers\productosController@editar')->name('editarProducto');
Route::get('/eliminarProducto', 'App\Http\Controllers\productosController@eliminar')->name('eliminarProducto');
Route::get('/verProducto', 'App\Http\Controllers\productosController@ver')->name('verProducto');

Route::post('/productos', 'App\Http\Controllers\productosController@guardar');
Route::post('/sucursales', 'App\Http\Controllers\sucursalesController@guardar');
Route::post('/categorias', 'App\Http\Controllers\categoriasController@guardar');