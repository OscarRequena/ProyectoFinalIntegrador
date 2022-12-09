@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    
<a href="articulos/create" class="btn btn-primary">crear</a>
<table class="table table-striped">
   <thead>
      <tr>
            <th scope="col">Numero de Ticket</th>
            <th scope="col">Solicitud</th>
            <th scope="col">Descripción</th>
            <th scope="col">Estado</th>
            <th scope="col">Prioridad</th>
            <th scope="col">Acciones</th>
      </tr>
   </thead>
   <tbody>
    @foreach ($tickets as $ticket)
        <tr>
            <td> {{$ticket->id}}</td>
           
            <td> {{$ticket->incidencia->tipo_incidencia}}</td>
        
            <td> {{$ticket->descripcion}}</td>
            <td> {{$ticket->estado->descripcion}}</td>
            <td> {{$ticket->prioridad}}</td>
            <td>

                <form action="{{route('ticket.destroy',$ticket->id)}}" method="post">
                 <a class="btn btn-info" href="/ticket/{{$ticket->id}}/edit">Editar</a>
                 @csrf
                 @method('DELETE')
                 <button type="submit" class="btn btn-danger">Borrar</button>
                </form>    
            </td>
        </tr>
    @endforeach
   </tbody>
  </table>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop