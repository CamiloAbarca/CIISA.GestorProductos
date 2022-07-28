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
    <a href="principal/sucursales"><button type="button" class="btn btn-warning">Crear y ver Sucursales</button></a>
    </div>
    <div class="col">
    <a href="principal/categorias"><button type="button" class="btn btn-info">Crear y ver Categorías</button></a>
    </div>
    <div class="col">
    <a href="principal/productos"><button type="button" class="btn btn-success">Crear Producto</button></a>
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
    <tr>
      <th scope="row">1</th>
      <td>54332</td>
      <td>iPhone 11</td>
      <td>500000</td>
      <td>200</td>
      <td>Smartphone</td>
      <td>Providencia</td>
      <td>64GB - Blanco</td>
      <td>
      <i class="bi bi-card-list"> Ver | </i>
      <i class="bi bi-pencil-square"> Editar | </i>
      <i class="bi bi-trash3"> Eliminar</i>
      </td>
    </tr>
  </tbody>
</table>
</div>
@stop