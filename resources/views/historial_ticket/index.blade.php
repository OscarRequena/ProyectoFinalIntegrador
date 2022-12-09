@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    
<a href="historial_ticket/create" class="btn btn-primary">crear</a>
<table class="table table-striped">
   <thead>
      <tr>
            <th scope="col">Ticket de incidencia</th>
            <th scope="col">Observación</th>
            <th scope="col">Fecha Creación</th>
            <th scope="col">Fecha Modificación</th>
            <th scope="col">Responsable</th>
           
            <th scope="col">Acciones</th>
      </tr>
   </thead>
   <tbody>
    @foreach ($h_tickets as $h_ticket)
        <tr>
        
            <td> {{$h_ticket->id_ticket}}</td>
     
            <td> {{$h_ticket->observaciones}}</td>
            <td> {{$h_ticket->created_at}}</td>
            <td> {{$h_ticket->updated_at}}</td>
            <td> {{$h_ticket->accion->usuario_asigna}}</td>
            <td>

                <form action="{{route('historial_ticket.destroy',$h_ticket->id)}}" method="post">
                 <a class="btn btn-info" href="/historial_ticket/{{$h_ticket->id}}/edit">Editar</a>
                 @csrf
                 @method('DELETE')
                 <button type="submit" class="btn btn-danger">Borrar</button>
                </form>    
            </td>
        </tr>
    @endforeach
   </tbody>
  </table>
  <a href="#" class="link-danger">Si necesitas ayuda, Ingresa a este enlace</a>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop