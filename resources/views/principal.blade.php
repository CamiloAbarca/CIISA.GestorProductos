@extends('layouts.master')

@section('title','Gestor de Productos')

@section('content')
<br>
<div class="container text-center">
<h1>Gestor de Productos</h1>
<br>

<div class="container text-center">
  <div class="row">
    <div class="col">
    <a href="{{ route('gestionSucursales') }}"><button type="button" class="btn btn-warning">Crear y ver Sucursales</button></a>
    </div>
    <div class="col">
    <a href="{{ route('gestionCategorias') }}"><button type="button" class="btn btn-info">Crear y ver Categorías</button></a>
    </div>
    <div class="col">
    <a href="{{ route('crearProducto') }}"><button type="button" class="btn btn-success">Crear Producto</button></a>
    </div>
  </div>
</div>




<br>
<br>
<h3>Lista de Productos</h3>
<br>

<div class="container text-center">
  <div class="row">
    <div class="col">
    </div>
    <div class="col">
    <form class="d-flex" role="buscar">
    <input class="form-control me-2" type="search" placeholder="Buscar..." aria-label="Search">
    <button class="btn btn-outline-success" type="submit">Buscar</button>
  </form>
    </div>
    <div class="col">
    </div>
  </div>
</div>

 
<br>
<table class="table table-dark table-striped">
<thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Código</th>
      <th scope="col">Nombre</th>
      <th scope="col">Precio</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Categoría</th>
      <th scope="col">Sucursal</th>
      <th scope="col">Descripción</th>
      <th scope="col">Acción</th>
    </tr>
  </thead>
  <tbody>
    @foreach($productos as $producto)
    <tr>
      <th>{{$producto->id}}</th>
      <td>{{$producto->codigo}}</td>
      <td>{{$producto->nombre}}</td>
      <td>{{$producto->precio}}</td>
      <td>{{$producto->cantidad}}</td>
      <td>{{$producto->categoriaId}}</td>
      <td>{{$producto->sucursalId}}</td>
      <td>{{$producto->descripcion}}</td>
      <td>
      <a href="{{ route('verProducto') }}" ><i class="bi bi-card-list"> Ver</i></a>
      <a href="{{ route('editarProducto') }}" ><i class="bi bi-pencil-square"> Editar</i></a>
      <a href="{{ route('eliminarProducto') }}" ><i class="bi bi-trash3">Eliminar</i></a>
      </td>
    </tr>
    @endforeach
    
  </tbody>
</table>
</div>
@stop