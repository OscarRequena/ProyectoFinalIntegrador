@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Usuarios</h1>
@stop

@section('content')
<form action="/usuarios/{{$usuario->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label for="" class="form-label">Codigo</label>
      <input id= "codigo" name="codigo" type="text" class="form-control" value="{{$usuario->codigo}}">
    </div>
      <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id= "nombre" name="nombre" type="text" class="form-control" tabindex="2" value="{{$usuario->nombre}}">
      </div>

      <div class="mb-3">
        <label for="" class="form-label">Apellido</label>
        <input id= "apellido" name="apellido" type="text" class="form-control" tabindex="3" value="{{$usuario->apellido}}">
      </div>

      <div class="mb-3">
        <label for="" class="form-label">Correo</label>
        <input id= "correo" name="correo" type="text" class="form-control" tabindex="4" value="{{$usuario->correo}}">
      </div>

      <div class="mb-3">
        <label for="" class="form-label">Rol</label>
        <input id= "rol" name="rol" type="text" class="form-control" tabindex="5" value="{{$usuario->rol}}">
      </div>

      <a href="/usuarios" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
  </form>

qxx
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop