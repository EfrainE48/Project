@extends('layout.layout')
@section('title','Funciones')    
@section('content')
<br>
<div class="row">
  <div class="col-sm-2"><a href="{{ route('functions.create') }}"><button class="btn btn-primary">Agregar</button></a></div>
  <div class="col-sm-50"><a href="{{ route('entraces.index') }}"><button class="btn btn-secondary">Entradas</button></a></div>
    <div class="col-sm-50"><a href="{{ route('functions.index') }}"><button class="btn btn-dark">Funciones</button></a></div>
    <div class="col-sm-50"><a href="{{ route('movies.index') }}"><button class="btn btn-secondary">Peliculas</button></a></div>
    <div class="col-sm-50"><a href="{{ route('consumables.index') }}"><button class="btn btn-dark">Productos</button></a></div>
    <div class="col-sm-50"><a href="{{ route('rooms.index') }}"><button class="btn btn-secondary">Salas</button></a></div>
    <div class="col-sm-50"><a href="{{ route('entraces.grafica') }}"><button class="btn btn-dark">Gráficar</button></a></div>


</div>
<h1 class="badage badage-warning text-center">Funciones registradas</h1>


@forelse ($functions as $function)

<div class="row">
<div class="card col-sm text-white bg-dark mb-3" style="width: 18rem;">
  <br>
    <img src="http://www.tutorialesprogramacionya.com/imagenes/cuadro1.jpg" class="rounded mx-auto d-block" alt="..." style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title"> Inicio: {{$function->start }}</h5>
      <p class="card-text"> Fin: {{$function->end}} hrs.</p>
      <p class="card-text text-muted-white">Disponibles: {{$function->available}}</p>

      <form action="{{ route('functions.destroy', $function->id)}}" method="post">
        <a class="btn btn-success" href="{{ route('functions.show',$function->id) }}">Ver</a>
        <a class="btn btn-warning" href="{{ route('functions.edit',$function->id) }}">Editar</a>
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
<h1>No hay funciones registradas en este momento</h1>
@endforelse

{{ $functions->links() }}
@endsection