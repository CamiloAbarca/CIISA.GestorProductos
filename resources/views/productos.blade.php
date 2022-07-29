@extends('layouts.master')

@section('title','Crear Producto')

@section('content')
<br>
<div class="container text-center">
<h1>Crear Producto</h1>
<br>

<div class="container text-center">
<form method="POST" action="{{ url('/productos') }}">
  <div class="mb-3">
    <label for="codigo" class="form-label">Código:</label>
    <input type="number" class="form-control" id="codigo" name='codigo'>
  </div>

  <div class="mb-3">
    <label for="nombre" class="form-label">Nombre Producto:</label>
    <input type="text" class="form-control" id="nombre" name='nombre'>
  </div>

  <div class="mb-3">
    <label for="categoria" class="form-label">Categoría:</label>
    <select id="categoria" name="categoria" class="form-select">
      <option>Seleccione...</option>
      <option id="smartphone">Smartphone</option>
      <option id="audifono">Audifono</option>
      <option id="notebook">Notebook</option>
    </select>
  </div>

  <div class="mb-3">
    <label for="sucursal" class="form-label">Sucursal:</label>
    <select id="sucursal" name="sucursal" class="form-select">
    <option>Seleccione...</option>
      <option id="providencia">Providencia</option>
      <option id="lasCondes">Las Condes</option>
      <option id="laCisterna">La Cisterna</option>
    </select>
  </div>

  <div class="mb-3">
    <label for="cantidad" class="form-label">Cantidad:</label>
    <input type="number" class="form-control" id="cantidad" name='cantidad'>
  </div>

  <div class="mb-3">
    <label for="precio" class="form-label">Precio:</label>
    <input type="number" class="form-control" id="precio" name='precio'>
  </div>

  <div class="mb-3">
    <label for="descripcion" class="form-label">Descripción:</label>
    <input type="text" class="form-control" id="descripcion" name='descripcion'>
  </div>

  <button type="submit" class="btn btn-primary">Crear</button>
</form>
<br>
<a href="{{ route('volverPrincipal') }}"><button type="button" class="btn btn-dark">Volver</button></a>

</div>
@stop