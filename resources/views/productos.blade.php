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
      <option id="1" name="1">1</option>
      <option id="2" name="2">2</option>
    </select>
  </div>

  <div class="mb-3">
    <label for="sucursal" class="form-label">Sucursal:</label>
    <select id="sucursal" name="sucursal" class="form-select">
    <option>Seleccione...</option>
    <option id="1" name="1">1</option>
    <option id="2" name="2">2</option>
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
</form>
<br>
<a href="{{ route('volverPrincipal') }}"><button type="button" class="btn btn-dark">Volver</button></a>

</div>
@stop