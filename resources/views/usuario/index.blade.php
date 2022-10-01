@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Usuarios</h1>
@stop

@section('content')
    
<a href="usuarios/create" class="btn btn-primary">crear</a>
<table class="table table-striped">
   <thead>
      <tr>
            <th scope="col">ID</th>
            <th scope="col">Código</th>
            <th scope="col">Nombre </th>
            <th scope="col">Apellido</th>
            <th scope="col">Correo</th>
            <th scope="col">Rol</th>
            <th scope="col">Acciones</th>
           
      </tr>
   </thead>
   <tbody>
    @foreach ($usuarios as $usuario)
        <tr>
            <td> {{$usuario->id}}</td>
            <td> {{$usuario->codigo}}</td>
            <td> {{$usuario->nombre}}</td>
            <td> {{$usuario->apellido}}</td>
            <td> {{$usuario->correo}}</td>
            <td> {{$usuario->rol}}</td>

            <td>

                <form action="{{route('usuarios.destroy',$usuario->id)}}" method="post">
                 <a class="btn btn-info" href="/usuarios/{{$usuario->id}}/edit">Editar</a>
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