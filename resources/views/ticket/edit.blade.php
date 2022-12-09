@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<form action="/ticket/{{$ticket->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label for="" class="form-label">Prioridad</label>
      <input id= "prioridad" name="prioridad" type="text" class="form-control" value="{{$ticket->prioridad}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Estado</label>
     
   
    <select name="id_estado" id="id_estado"  class="form-select">

         
           
            <input id= "id_estado" name="id_estado" type="text" class="form-control" value="{{$ticket->id_estado}}"">
    
          </select>
    
    </div>

    <div class="mb-3">
        <label for="" class="form-label">descripcion</label>
        <input id= "descripcion" name="descripcion" type="text" class="form-control" value="{{$ticket->descripcion}}"">
      </div>



      <a href="/ticket" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
  </form>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop