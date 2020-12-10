@extends('layout.layout')
@section('title','Productos')    
@section('content')
<br>
<div class="row">
  <div class="col-sm-2"><a href="{{ route('consumables.create') }}"><button class="btn btn-primary">Agregar</button></a></div>
  <div class="col-sm-50"><a href="{{ route('entraces.index') }}"><button class="btn btn-secondary">Entradas</button></a></div>
    <div class="col-sm-50"><a href="{{ route('functions.index') }}"><button class="btn btn-dark">Funciones</button></a></div>
    <div class="col-sm-50"><a href="{{ route('movies.index') }}"><button class="btn btn-secondary">Peliculas</button></a></div>
    <div class="col-sm-50"><a href="{{ route('consumables.index') }}"><button class="btn btn-dark">Productos</button></a></div>
    <div class="col-sm-50"><a href="{{ route('rooms.index') }}"><button class="btn btn-secondary">Salas</button></a></div>
    <div class="col-sm-50"><a href="{{ route('entraces.grafica') }}"><button class="btn btn-dark">Gráficar</button></a></div>


</div>
<h1 class="badage badage-warning text-center">Productos registradas</h1>

@forelse ($consumables as $consumable)

<div class="row">
<div class="card col-sm text-white bg-dark" style="width: 18rem;">
  <br>
    <img src="http://www.tutorialesprogramacionya.com/imagenes/cuadro1.jpg" class="rounded mx-auto d-block" alt="..." style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">Producto: {{$consumable->name}}</h5>
      <p class="card-text">Precio: {{$consumable->price}} pesos.</p>
      <p class="card-text text-muted-white">Cantidad: {{$consumable->quanty}}</p>

      <form action="{{ route('consumables.destroy', $consumable->id)}}" method="post">
        <a class="btn btn-success" href="{{ route('consumables.show',$consumable->id) }}">Ver</a>
        <a class="btn btn-warning" href="{{ route('consumables.edit',$consumable->id) }}">Editar</a>
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

<h1>No hay articulos registradas en este momento</h1>
@endforelse

{{$consumables->links()}}

@endsection