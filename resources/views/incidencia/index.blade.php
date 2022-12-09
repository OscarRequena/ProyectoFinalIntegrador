@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Incidencias</h1>
@stop

@section('content')
    
<a href="incidencias/create" class="btn btn-primary">crear</a>
<table class="table table-striped">
   <thead>
      <tr>
            <th scope="col">ID</th>
            
            <th scope="col">Tipo</th>
            <th scope="col">Acciones</th>
      </tr>
   </thead>
   <tbody>
    @foreach ($incidencias as $incidencia)
        <tr>
            <td> {{$incidencia->id}}</td>
            
            <td> {{$incidencia->tipo_incidencia}}</td>
            <td>

                <form action="{{route('incidencias.destroy',$incidencia->id)}}" method="post">
                 <a class="btn btn-info" href="/incidencias/{{$incidencia->id}}/edit">Editar</a>
                 @csrf
                 @method('DELETE')
                 <button type="submit" class="btn btn-danger">Borrar</button>
                </form>    
            </td>
        </tr>
    @endforeach
   </tbody>
  </table>

  <a href="#" class="link-warring">Si necesitas ayuda, Ingresa a este enlace</a>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop