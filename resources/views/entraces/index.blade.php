@extends('layout.layout')
@section('title','Agregar Entrada')
@section('content')
<br>
<div class="row">
  <div class="col-sm-2"><a href="{{ route('entraces.create') }}"><button class="btn btn-primary">Agregar</button></a></div><div class="col-sm-50"><a href="{{ route('entraces.index') }}"><button class="btn btn-secondary">Entradas</button></a></div>
  <div class="col-sm-50"><a href="{{ route('functions.index') }}"><button class="btn btn-dark">Funciones</button></a></div>
  <div class="col-sm-50"><a href="{{ route('movies.index') }}"><button class="btn btn-secondary">Peliculas</button></a></div>
  <div class="col-sm-50"><a href="{{ route('consumables.index') }}"><button class="btn btn-dark">Productos</button></a></div>
  <div class="col-sm-50"><a href="{{ route('rooms.index') }}"><button class="btn btn-secondary">Salas</button></a></div>
  <div class="col-sm-50"><a href="{{ route('entraces.grafica') }}"><button class="btn btn-dark">Gráficar</button></a></div>


</div>
<div>
  <h1 class="text-center">Entradas registradas</h1></div>

@forelse ($entraces as $entrace)

<div class="row">
<div class="card col-sm text-white bg-dark" style="width: 18rem;">
    <img src="http://www.tutorialesprogramacionya.com/imagenes/cuadro1.jpg" class="rounded mx-auto d-block" alt="..." style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">Entrada: {{$entrace->price}}</h5>
      <p class="card-text"> Hora de entrada: {{$entrace->hourEntrace}}</p>
      <p class="card-text">Sala: {{$entrace->salas_id}}</p>

      
      <form action="{{ route('entraces.destroy', $entrace->id)}}" method="post">
        <a class="btn btn-success" href="{{ route('entraces.show',$entrace->id) }}">Ver</a>
        <a class="btn btn-warning" href="{{ route('entraces.edit',$entrace->id) }}">Editar</a>
        <br><br>
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Eliminar</button>
      </form>

    </div>
  </div>
</div>
<br>
@empty

<h1>No hay entradas registradas en este momento</h1>
@endforelse

{{$entraces->links()}}

@endsection