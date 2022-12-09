@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Equipos de TI</h1>
@stop

@section('content')
<form action="/requerimientos/{{$requerimiento->id}}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id= "name" name="name" type="text" class="form-control" value="{{$requerimiento->name}}">
      </div>

    <div class="mb-3">
        <label for="" class="form-label">Tipo</label>
        <input id= "tipo_requerimiento" name="tipo_requerimiento" type="text" class="form-control" value="{{$requerimiento->tipo_requerimiento}}"">
    </div>

      
      <a href="/requerimientos" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
  </form>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop