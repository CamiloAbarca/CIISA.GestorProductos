@extends('layouts.master')

@section('title','Crear Producto')

@section('content')
<br>
<div class="container text-center">
<h1>Crear Producto</h1>
<br>

<div class="container text-center">
<form>
  <div class="mb-3">
    <label for="codigo" class="form-label">Código:</label>
    <input type="number" class="form-control" id="codigo">
  </div>

  <div class="mb-3">
    <label for="nombre" class="form-label">Nombre Producto:</label>
    <input type="text" class="form-control" id="nombre">
  </div>

  <div class="mb-3">
    <label for="categoria" class="form-label">Categoría:</label>
    <select id="categoria" class="form-select">
      <option>Seleccione...</option>
    </select>
  </div>

  <div class="mb-3">
    <label for="sucursal" class="form-label">Sucursal:</label>
    <select id="sucursal" class="form-select">
      <option>Seleccione...</option>
    </select>
  </div>

  <div class="mb-3">
    <label for="cantidad" class="form-label">Cantidad:</label>
    <input type="number" class="form-control" id="cantidad">
  </div>

  <div class="mb-3">
    <label for="precio" class="form-label">Precio:</label>
    <input type="number" class="form-control" id="precio">
  </div>

  <div class="mb-3">
    <label for="descripcion" class="form-label">Descripción:</label>
    <input type="text" class="form-control" id="descripcion">
  </div>
  
  <button type="submit" class="btn btn-primary">Crear</button>
</form>

</div>
@stop