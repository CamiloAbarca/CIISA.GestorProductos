@extends('layouts.master')

@section('title','Crear Categorías')

@section('content')
<br>
<div class="container text-center">
<h1>Creación de Categoría</h1>
<br>
@if ($mensaje = Session::get('success'))
<div class="alert alert-success" role="alert">
  {{ $mensaje }}
</div>
@endif
<br>

<form method="POST" action="{{ route('categoriasGuardar') }}">
  <div class="mb-3">
    <label for="nombre" class="form-label">Nombre de la Categoría:</label>
    <input type="text" class="form-control" id="nombre" name="nombre">
  </div>
  <div class="mb-3">
    <label for="detalle" class="form-label">Detalle:</label>
    <input type="text" class="form-control" id="detalle" name="detalle">
  </div>
  @if($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach($errors->all() as $error)
      <li>
        {{ $error }}
      </li>
      @endforeach
    </ul>
  </div>
  @endif
  <button type="submit" class="btn btn-primary">Crear</button>
  <br>
</form>
<br>
<a href="{{ route('volverPrincipal') }}"><button type="button" class="btn btn-dark">Volver</button></a>

<br>
<hr>
<h3>Lista de Categorías</h3>
<br>
<form class="d-flex" role="buscar">
  <input class="form-control me-2" type="search" placeholder="Buscar..." aria-label="Search">
  <button class="btn btn-outline-success" type="submit">Buscar</button>
</form>
<br>
<table class="table table-dark table-striped">
<thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Detalle</th>
      <th scope="col">Acción</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Smartphone</td>
      <td>Dispositivos Móviles</td>
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