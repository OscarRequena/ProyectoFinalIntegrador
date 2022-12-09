@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    
@stop

@section('content')
<h2>Solicitud</h2>
<form action="/crear_incidencia" method="POST">
    @csrf
    {{-- <div class="mb-3">
      <label for="" class="form-label">Codigo</label>
      <input id= "codigo" name="codigo" type="text" class="form-control" tabindex="1">
    </div> --}}


      <div class="mb-3">
        <label for="id_incidencia" class="form-label">Tipo_incidencia</label>
        <select name="id_incidencia" id="id_incidencia"  class="form-select">
          
            @foreach ($incidencia as $incidencias)
              <option value="{{$incidencias->id}}">{{$incidencias->tipo_incidencia}}</option>
              
          @endforeach

        </select>
      </div>


      <div class="mb-3">
        <label for="" class="form-label">Prioridad</label>
        <input id= "prioridad" name="prioridad" type="text"  class="form-control" tabindex="4">
      </div>

      <div class="mb-3">
        <label for="" class="form-label">Descripcion</label>
        <input id= "descripcion" name="descripcion" type="text" class="form-control" tabindex="2">
      </div>

      <div class="mb-3">
        <input id= "id_estado" name="id_estado" value="1" type="hidden" class="form-control" tabindex="2">
      </div> 

      <a href="/crear_incidencia" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
  </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop