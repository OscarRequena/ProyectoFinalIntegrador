@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Requerimiento</h1>
@stop

@section('content')
    
<a href="requerimientos/create" class="btn btn-primary">crear</a>
<table class="table table-striped">
   <thead>
      <tr>
            <th scope="col">ID</th>
            
            <th scope="col">Tipo</th>
            <th scope="col">Acciones</th>
      </tr>
   </thead>
   <tbody>
    @foreach ($requerimientos as $requerimiento)
        <tr>
            <td> {{$requerimiento->id}}</td>
            
            <td> {{$requerimiento->tipo_requerimiento}}</td>
            <td>

                <form action="{{route('requerimientos.destroy',$requerimiento->id)}}" method="post">
                 <a class="btn btn-info" href="/requerimientos/{{$requerimiento->id}}/edit">Editar</a>
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