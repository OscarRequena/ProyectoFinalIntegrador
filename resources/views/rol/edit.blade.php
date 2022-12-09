@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Tipo de roles</h1>
@stop

@section('content')
<form action="/roles/{{$rol->id}}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="" class="form-label">Tipo</label>
        <input id= "tipo_rol" name="tipo_rol" type="text" class="form-control" value="{{$rol->tipo_rol}}"">
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