@extends('layouts.master')

@section('content')
<br>
<h1>Gestor de Productos</h1>
<br>

<button type="button" class="btn btn-success">Crear Producto</button>

<hr>
<h3>Lista de Productos</h3>
<table class="table table-dark table-striped">
<thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Acción</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>
      <i class="bi bi-card-list"> Ver</i>
      <br>
      <i class="bi bi-pencil-square"> Editar</i>
      <br>
      <i class="bi bi-trash3"> Eliminar</i>
      </td>
    </tr>
  </tbody>
</table>
@stop