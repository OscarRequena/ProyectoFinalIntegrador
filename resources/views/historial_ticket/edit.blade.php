@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<form action="/historial_ticket/{{$h_tickets->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label for="" class="form-label">Observacion</label>
      <input id= "observaciones" name="observaciones" type="text" class="form-control" value="{{$h_tickets->observaciones}}">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Responsable</label>
        <input id= "id_accion" name="id_accion" type="text" class="form-control" value="{{$h_tickets->id_accion}}">
      </div>

      <div class="mb-3">
        <label for="" class="form-label">Fecha</label>
        <input id= "updated_at" name="updated_at" type="date" class="form-control" value="{{$h_tickets->updated_at}}">
      </div>
      <a href="/historial_ticket" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
  </form>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop