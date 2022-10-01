@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Equipos de TI</h1>
@stop

@section('content')
<h2>CREAR FORMULARIOS</h2>
<form action="/equipos" method="POST">
    @csrf
    <div class="mb-3">
      <label for="" class="form-label">Codigo</label>
      <input id= "codigo" name="codigo" type="text" class="form-control" tabindex="1">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id= "nombre" name="nombre" type="text" class="form-control" tabindex="2">
      </div>

      <div class="mb-3">
        <label for="" class="form-label">Estado</label>
        <input id= "estado" name="estado" type="text" class="form-control" tabindex="3">
      </div> 
      <div class="mb-3">
        <label for="" class="form-label">Cantidad</label>
        <input id= "cantidad" name="cantidad" type="number" class="form-control" tabindex="4">
      </div>


      <a href="/equipos" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
  </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop