@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Equipos de TI</h1>
@stop

@section('content')
    
<a href="equipos/create" class="btn btn-primary">crear</a>
<table class="table table-striped">
   <thead>
      <tr>
            <th scope="col">ID</th>
            <th scope="col">Código</th>
            <th scope="col">Nombre</th>
            <th scope="col">Estado</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Acciones</th>
      </tr>
   </thead>
   <tbody>
    @foreach ($equipos as $equipo)
        <tr>
            <td> {{$equipo->id}}</td>
            <td> {{$equipo->codigo}}</td>
            <td> {{$equipo->nombre}}</td>
            <td> {{$equipo->estado}}</td>
            <td> {{$equipo->cantidad}}</td>
            <td>

                <form action="{{route('equipos.destroy',$equipo->id)}}" method="post">
                 <a class="btn btn-info" href="/equipos/{{$equipo->id}}/edit">Editar</a>
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