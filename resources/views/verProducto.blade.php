@extends('layouts.master')

@section('title','Gestor de Productos')

@section('content')
<br>
<div class="container text-center">
<h1>Gestor de Productos</h1>
<br>


<br>
<h3>Producto  XXXX</h3>
<br>
<br>

<div class="card text-center">
  <div class="card-header">
    #codigo
  </div>
  
  <div class="card-body">
    <h2 class="card-title">nombre</h2>
    <h5 class="card-title">cantidad</h5>
    <h5 class="card-title">precio</h5>
    <h5 class="card-title">categoria</h5>
    <h5 class="card-title">sucursal</h5>
    <p class="card-text">descripción</p><a href="{{ route('volverPrincipal') }}"><button type="button" class="btn btn-dark">Volver</button></a>
  </div>
  <!--<div class="card-footer text-muted">
    2 days ago
  </div>-->
</div>

</div>
@stop