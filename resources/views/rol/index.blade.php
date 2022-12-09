@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Roles</h1>
@stop

@section('content')
    
<a href="roles/create" class="btn btn-primary">crear</a>
<table class="table table-striped">
   <thead>
      <tr>
            <th scope="col">ID</th>
            <th scope="col">Tipo</th>
      </tr>
   </thead>
   <tbody>
    @foreach ($roles as $rol)
        <tr>
            <td> {{$rol->id}}</td>
            <td> {{$rol->tipo_rol}}</td>
            <td>

                <form action="{{route('roles.destroy',$rol->id)}}" method="post">
                 <a class="btn btn-info" href="/roles/{{$rol->id}}/edit">Editar</a>
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