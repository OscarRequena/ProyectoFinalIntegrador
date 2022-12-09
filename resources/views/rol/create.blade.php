@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Rol</h1>
@stop

@section('content')
<h2>CREAR FORMULARIOS</h2>
<form action="/roles" method="POST">
    @csrf



      <div class="mb-3">
        <label for="" class="form-label">Tipo Rol</label>
        <input id= "tipo_rol" name="tipo_rol" type="text" class="form-control" tabindex="3">
      </div> 

      <a href="/roles" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
  </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop