@extends('layouts.master')

@section('content')
<br>
<h1>Creación de Sucursal</h1>
<br>

<form>
  <div class="mb-3">
    <label for="nombreSucursal" class="form-label">Nombre de Sucursal:</label>
    <input type="text" class="form-control" id="nombreSucursal">
  </div>
  <div class="mb-3">
    <label for="direccionSucursal" class="form-label">Dirección:</label>
    <input type="text" class="form-control" id="direccionSucursal">
  </div>
  <button type="submit" class="btn btn-primary">Crear</button>
  <br>
</form>
<br>
<a href=""><button type="button" class="btn btn-dark">Volver</button></a>

<br>
<hr>
<h3>Lista de Sucursales</h3>
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
      <th scope="col">Nombre</th>
      <th scope="col">Dirección</th>
      <th scope="col">Acción</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Providencia</td>
      <td>Alferez Real 1369</td>
      <td>
      <i class="bi bi-card-list"> Ver | </i>
      <i class="bi bi-pencil-square"> Editar | </i>
      <i class="bi bi-trash3"> Eliminar</i>
      </td>
    </tr>
  </tbody>
</table>
@stop