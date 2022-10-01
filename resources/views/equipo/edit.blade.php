@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Equipos de TI</h1>
@stop

@section('content')
<form action="/equipos/{{$equipo->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label for="" class="form-label">Codigo</label>
      <input id= "codigo" name="codigo" type="text" class="form-control" value="{{$equipo->codigo}}">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id= "nombre" name="nombre" type="text" class="form-control" value="{{$equipo->nombre}}">
      </div>

    <div class="mb-3">
        <label for="" class="form-label">Estado</label>
        <input id= "estado" name="estado" type="text" class="form-control" value="{{$equipo->estado}}"">
    </div>

      <div class="mb-3">
        <label for="" class="form-label">Cantidad</label>
        <input id= "cantidad" name="cantidad" type="number" class="form-control" value="{{$equipo->cantidad}}">
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