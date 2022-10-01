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
            <th scope="col">ID</th>
            <th scope="col">Código</th>
            <th scope="col">Descripción </th>
            <th scope="col">Cantidad</th>
            <th scope="col">Precio</th>
            <th scope="col">Acciones</th>
      </tr>
   </thead>
   <tbody>
    @foreach ($articulos as $articulo)
        <tr>
            <td> {{$articulo->id}}</td>
            <td> {{$articulo->codigo}}</td>
            <td> {{$articulo->descripcion}}</td>
            <td> {{$articulo->cantidad}}</td>
            <td> {{$articulo->precio}}</td>
            <td>

                <form action="{{route('articulos.destroy',$articulo->id)}}" method="post">
                 <a class="btn btn-info" href="/articulos/{{$articulo->id}}/edit">Editar</a>
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